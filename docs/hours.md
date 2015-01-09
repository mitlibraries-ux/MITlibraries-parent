# Hours

## Current setup

We're currently handling hours two ways on libraries.mit.edu:

### Hours in WordPress

At [libraries.mit.edu/hours](http://libraries.mit.edu/hours), one can view a weekly display of each library location's hours, with a date picker, next week/last week navigation, etc.

These hours entries exist in Wordpress. Broadly speaking, each hours entry exists as a single post in Wordpress. This is hugely inefficient, and has been a big problem for the site. The hours have to be uploaded as a crazy multi-sheet spreadsheet ([here](//wikis.mit.edu/confluence/display/UXWS/Hours)) via an [Excel-to-PHP](https://github.com/zgreen/MITlibraries-parent/tree/prod/libs/PHPExcel-develop) spreadsheet plugin, parsed with [a heavy PHP script](github.com/zgreen/MITlibraries-parent/blob/prod/lib/hours.php), and spat out onto the page. The only reason this page doesn't take many, many seconds to load is that all that data gets cached by Wordpress (using the W3 Total Cache plugin). These hours posts also heavily pollute the site, are indexed by search engines, confuse users, etc.

### Hours in JSON

Each location's hours for today also appear on the homepage, on individual location pages (like [libraries.mit.edu/barker](//libraries.mit.edu)), and on the [study spaces page](libraries.mit.edu/study). This hours data is loaded via jQuery Ajax from [term-hours.json](//github.com/zgreen/MITlibraries-parent/blob/prod/term-hours.json) (`/term-hours.json`).

#### Hours JSON data structure

- This set of hours data is organized by semester.
- Each semester is given a start and end date (`termStart` and `termEnd`).
- Each semester is also given a set of locations (ex. `"locationName" : "Barker Library"`). 
- Each location is given a set of default Monday-Sunday opening and closing hours. For example:
```
{
	"locationName" : "Dewey Library",
	"monday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"tuesday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"wednesday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"thursday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"friday" : {
		"open" : "8:30am",
		"closed" : "6:00pm"
	},
	"saturday" : {
		"open" : "11:00am",
		"closed" : "7:00pm"
	},
	"sunday" : {
		"open" : "11:00am",
		"closed" : "11:00pm"
	}
}
```
- Each location is also given a set of exception dates (if applicable), for example:
```
{
	"locationName" : "Dewey Library",
	"monday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"tuesday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"wednesday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"thursday" : {
		"open" : "8:30am",
		"closed" : "11:00pm"
	},
	"friday" : {
		"open" : "8:30am",
		"closed" : "6:00pm"
	},
	"saturday" : {
		"open" : "11:00am",
		"closed" : "7:00pm"
	},
	"sunday" : {
		"open" : "11:00am",
		"closed" : "11:00pm"
	},
	"exceptions" : [
		{
			"date" : "10/13/2014",
			"closedAll" : false,
			"open" : "12:00pm",
			"closed" : "11:00pm"
		},
		{
			"date" : "11/11/2014",
			"closedAll" : false,
			"open" : "12:00pm",
			"closed" : "11:00pm"
		},
		{
			"date" : "11/26/2014",
			"closedAll" : false,
			"open" : "8:30am",
			"closed" : "5:00pm"
		},
		{
			"date" : "11/27/2014",
			"closedAll" : true,
			"open" : "closed",
			"closed" : "closed"
		},
		{
			"date" : "11/28/2014",
			"closedAll" : true,
			"open" : "closed",
			"closed" : "closed"
		},
		{
			"date" : "12/19/2014",
			"closedAll" : false,
			"open" : "8:30am",
			"closed" : "6:00pm"
		}
	]
}
```
- Note that the `"closedAll"` value is not necessary, as current scripts do not use this value.

#### Using this data

- [hours-today.js](//github.com/zgreen/MITlibraries-parent/blob/prod/js/hours-today.js) (`/js/hours-today.js`) is the script that loads today's hours. This script relies on [moment.js](//github.com/zgreen/MITlibraries-parent/blob/prod/js/libs/moment.min.js) (`/js/libs/moment.min.js`) with the [twix plugin](//github.com/zgreen/MITlibraries-parent/blob/prod/js/libs/twix.min.js) (`/js/libs/twix.min.js`) to create the proper date ranges for each semester and week. The script first checks which semester today's date falls within, and then checks the proper location for any exceptions--and if none exist, the default hours for that location, for the current day, will be displayed.

- To load a location's hours anywhere on the site, you need only use the `data-location-hours` data-attribute. For example, to load Barker's hours in a `div`, use `<div data-location-hours="Barker Library"></div>`. To load Dewey's hours in a link, use `<a href="example-page" data-location-hours="Dewey Library"></a>`. Note that the location names much match exactly those in the `term-hours.json` file.

- To add a new semester, copy the JSON data structure from the previous semester and set the correct hours for each location. You may store as many semester's worth of data in this file as you like, but old semesters may also be safely deleted (doing so will also help reduce load time for the `term-hours.json` file).

#### Template views

There is a WordPress page, [/term-hours](//libraries.mit.edu/term-hours) that presents this data in various formats (Today's hours, each location's default hours, and each location's exceptions). There is a separate script for handling this data and creating the proper templates, [page-term-hours.js](//github.com/zgreen/MITlibraries-parent/blob/prod/js/page-term-hours.js) (`/js/page-term-hours.js`).

## Next steps

Ideally, all hours on the site should be parsed as JSON. This is theoretically possible to do in WordPress, but WordPress makes nesting and repeating data fields somewhat difficult and arduous. As of this writing, it's recommended that the hours data be rendered from some other source, like a Google Sheet. Alternatively, we could make use of a GUI/form that would allow people to add/update hours JSON values without having to acutally hand edit the JSON file itself.

From here, we'd like to template out a weekly view similar to our current one on [libraries.mit.edu/hours](http://libraries.mit.edu/hours).

## To-dos

1. Create a weekly template view for all location hours. Ideally, this would include prev/next week and datepicker functionality.
2. Build out Google Sheet + script/GUI/form to `POST`/`EDIT`/`DELETE` hours values.