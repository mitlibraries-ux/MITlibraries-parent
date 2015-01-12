<?php 
	get_header();
?>

	<div id="search-main" class="search--lib-resources flex-container">
		<h2>Search</h2>
		<div class="search-options--static flex-container js-hidden">
			<div class="col-1">
				<div>Articles, e-books, &amp; more:</div>
				<div>E-Journals &amp; databases:</div>
				<div>Books &amp; more at MIT:</div>
				<div>Books &amp; more worldwide:</div>
			</div>
			<div class="col-2">
				<a href="/bartonplus">BartonPlus (mega search)</a>
				<a href="/vera">Vera</a>
				<a href="/barton">Barton (classic search)</a>
				<a href="/worldcat">WorldCat</a>
				<a href="/course-reserves">Course reserves</a>
				<a href="/about/site-search">Site search</a>
			</div>
		</div>
		<div class="wrap-select--resources no-js-hidden">
			<div class="selected"></div>
			<ul id="resources" class="resource-list">
				<li class="bartonplus active" data-target="bartonplus" data-option="option-1"><span class="main">Articles, e-books, &amp; more <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg></span> <span class="name">BartonPlus (mega-search)</span></li>
				<li class="vera" data-target="vera" data-option="option-2"><span class="main">E-journals &amp; databases <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg></span> <span class="name">Vera</span></li>
				<li class="barton" data-target="barton" data-option="option-3"><span class="main">Books &amp; more at MIT <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg></span> <span class="name">Barton catalog (classic search)</span></li>
				<li class="worldcat" data-target="worldcat" data-option="option-4"><span class="main">Books &amp; more worldwide <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg></span> <span class="name">WorldCat</span></li>
				<li class="course-reserves tall" data-target="course-reserves" data-option="option-5"><span class="main">Course reserves <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg></span></li>
				<li class="site-search" data-target="site-search" data-option="option-6"><span class="main">Website <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg></span><span class="name">Site search</span></li>
				<li class="has-link"><a href="/search" class="more"><span>More search tools &amp; help</span> <span class="name">Images, data, DSpace, etc.</span></a></li>
			</ul>
		</div>
		<span class="label no-js-hidden">for</span>
		<form id="bartonplus" class="input-submit flex-container active no-js-hidden">
			<div class="hidden-fields"></div>
			<input type="text" class="option-1 active" placeholder="ex: carbon nanotubes" autofocus="autofocus" tabindex="1">
			<button type="submit">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
					<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
				</svg>
			</button>
		</form>
		<form id="vera" class="no-js-hidden">
			<div class="hidden-fields"></div>
			<input type="text" class="option-2" placeholder="ex: new eng j of med, AIP conf proc">
			<button type="submit">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
					<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
				</svg>
			</button>
		</form>
		<form id="barton" class="no-js-hidden">
			<div class="hidden-fields"></div>
			<input type="text" class="option-3 searchtext" id="bookrequest" placeholder="ex: carbon nanotubes, game design">
			<button type="submit">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
					<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
				</svg>
			</button>
		</form>
		<form id="worldcat" class="no-js-hidden">
			<div class="hidden-fields"></div>
			<input type="text" class="option-4" placeholder="ex: carbon nanotubes, game design">
			<button type="submit">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
					<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
				</svg>
			</button>
		</form>	
		<form id="course-reserves" class="no-js-hidden">
			<div class="hidden-fields"></div>
			<input type="text" id="coursereservesrequest" value="" class="option-5 searchtext" placeholder="ex: 18.01, STS.320, 21F.108">
			<button type="submit">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
					<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
				</svg>
			</button>
		</form>
		<form id="site-search" class="no-js-hidden">
			<div class="hidden-fields"></div>
			<input type="text" class="option-6" placeholder="ex: hours">
			<button type="submit">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
					<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
				</svg>
			</button>
		</form>
		<span class="label no-js-hidden">by</span>
		<div class="wrap-select--keywords flex-container active no-js-hidden">
			<select name="" id="" class="keywords option-1 search-by active" tabindex="3" autocomplete="off">
				<option value="">Keyword</option>
				<option value="TI ">Title</option>
				<option value="AU ">Author</option>
			</select>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
		</div>
		<div class="wrap-select--keywords flex-container long no-js-hidden">
			<select name="" id="" class="keywords search-by option-2" tabindex="3" autocomplete="off">
				<option value="contains">Partial Words In Title</option>
				<option value="startsWith">Title Starts With</option>
				<option value="exactMatch">Exact Title</option>
			</select>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
		</div>
		<div class="wrap-select--keywords flex-container long no-js-hidden">
			<select name="" id="" class="keywords search-by option-3" tabindex="3" autocomplete="off">
				<option value="find_WRD">Keyword</option>
				<option value="scan_TTL">Title starts with</option>
				<option value="scan_AUT">Author (last name first)</option>
				<option value="scan_CND">Call number starts with</option>
			</select>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
		</div>
		<div class="wrap-select--keywords flex-container no-js-hidden">
			<select name="" id="" class="keywords search-by option-4" tabindex="3" autocomplete="off">
				<option value="keyword">Keyword</option>
				<option value="author">Author</option>
				<option value="title">Title</option>
			</select>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
		</div>
		<div class="wrap-select--keywords flex-container long no-js-hidden">
			<select name="" id="" class="keywords search-by option-5" tabindex="3" autocomplete="off">
				<option value="scan_CNB">Course number starts with</option>
				<option value="find_WIN">Instructor keyword</option>
				<option value="find_WOU">Course name keyword</option>
			</select>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
		</div>
		<div class="wrap-select--keywords flex-container no-js-hidden">
			<select name="" id="" class="keywords search-by option-6" tabindex="3" disabled>
				<option value="keyword">Keyword</option>
			</select>
		</div>
		<a href="http://libraries.mit.edu/bartonplus-advanced" class="search-advanced bartonplus active no-js-hidden">Go to BartonPlus advanced search</a>
		<a href="http://libraries.mit.edu/barton-advanced" class="search-advanced barton no-js-hidden">Go to Barton advanced search</a>
		<a href="http://mit.worldcat.org/advancedsearch" class="search-advanced worldcat no-js-hidden">Go to WorldCat advanced search</a>
		<a href="http://libraries.mit.edu/barton-reserves" class="search-advanced course-reserves no-js-hidden">Go to Course Reserves advanced search</a>
	</div><!-- end div.search-main -->
	<div class="content-main flex-container">
		<div class="col-1 flex-item">
			<div class="hours-locations">
				<h2>Hours &amp; locations</h2>
				<div class="location">
					<a href="/barker" class="img-loc barker"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/barker">Barker Library</a></h3><div class="hours"><span data-location-hours="Barker Library"></span> today,</div> <a href="/study/24x7/" class="special">24/7 Study</a><div class="location-info"><a href="/locations/#!barker-library" class="map-location">10-500</a><a href="tel:617-253-0968" class="phone"><span class="number">617-253-0968</span></a></div>
					</div>
				</div>
				<div class="location">
					<a href="/dewey" class="img-loc dewey"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/dewey">Dewey Library</a></h3><div class="hours"><span data-location-hours="Dewey Library"></span> today,</div> <a href="/study/24x7/" class="special">24/7 Study</a><div class="location-info"><a href="/locations/#!dewey-library" class="map-location">E53-100</a><a href="tel:617-253-5676" class="phone"><span class="number">617-253-5676</span></a></div>
					</div>
				</div>
				<div class="location">
					<a href="/hayden" class="img-loc hayden"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/hayden">Hayden Library</a></h3><div class="hours"><span data-location-hours="Hayden Library"></span> today,</div> <a href="/study/24x7/" class="special">24/7 Study</a><div class="location-info"><a href="/locations/#!hayden-library" class="map-location">14S-100</a><a href="tel:617-253-5671" class="phone"><span class="number">617-253-5671</span></a></div>
					</div>
				</div>
				<a href="#0" class="show-more hidden-non-mobile">
					<svg class="icon-arrow-down" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="16.3" height="9.4" viewBox="2.7 8.3 16.3 9.4" enable-background="new 2.7 8.3 16.3 9.4" xml:space="preserve"><path d="M18.982 9.538l-8.159 8.159L2.665 9.538l1.284-1.283 6.875 6.875 6.875-6.875L18.982 9.538z"/></svg>Show 3 More
				</a>
				<div class="location hidden-mobile inactive-mobile">
					<a href="/archives" class="img-loc archives"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/archives">Institute Archives &amp; Special Collections</a></h3><div class="hours"><span data-location-hours="Institute Archives & Special Collections"></span> today</div><div class="location-info"><a href="/locations/#!institute-archives-special-collections" class="map-location">14N-118</a><a href="tel:617-253-5136" class="phone"><span class="number">617-253-5136</span></a></div>
					</div>
				</div>
				<div class="location hidden-mobile inactive-mobile">
					<a href="/music" class="img-loc lewis"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/music">Lewis Music Library</a></h3><div class="hours"><span data-location-hours="Lewis Music Library"></span> today</div><div class="location-info"><a href="/locations/#!lewis-music-library" class="map-location">14E-109</a><a href="tel:617-253-5689" class="phone"><span class="number">617-253-5689</span></a></div>
					</div>
				</div>
				<div class="location hidden-mobile inactive-mobile">
					<a href="/rotch" class="img-loc rotch"></a>
					<div class="wrap-loc-info">
						<h3><a class="name-location" href="/rotch">Rotch Library</a></h3><div class="hours"><span data-location-hours="Rotch Library"></span> today</div><div class="location-info"><a href="/locations/#!rotch-library" class="map-location">7-238</a><a href="tel:617-258-5592" class="phone"><span class="number">617-258-5592</span></a></div>
					</div>
				</div>
				<a href="/hours" class="button-primary--green full add-margin link-hours">All hours &amp; locations</a>
				<div class="extra">
					<a href="/map" class="button-tertiary link-map more"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><path d="M16 2.922v12.695c0 0.211-0.117 0.336-0.273 0.336 -0.055 0-0.117-0.016-0.18-0.039l-4.344-2.109c-0.125-0.055-0.281-0.086-0.438-0.086 -0.172 0-0.336 0.031-0.461 0.094l-4.109 2.086C6.062 15.969 5.883 16 5.711 16c-0.156 0-0.305-0.023-0.422-0.07l-4.828-2.141C0.203 13.68 0 13.359 0 13.078V0.383c0-0.219 0.117-0.344 0.289-0.344 0.055 0 0.109 0.008 0.172 0.031l4.828 2.141c0.117 0.047 0.266 0.078 0.422 0.078 0.172 0 0.352-0.039 0.484-0.102l4.109-2.086C10.43 0.039 10.594 0 10.766 0c0.156 0 0.312 0.031 0.438 0.086l4.344 2.109C15.797 2.312 16 2.641 16 2.922zM5.5 14.805V3.484L1 1.523v11.32L5.5 14.805zM10.5 12.508V1.242L6 3.492v11.266L10.5 12.508zM15 3.133l-4-1.906v11.289l4 1.898V3.133z"/></svg> View map</a>
					<a href="/study" class="button-tertiary link-study more"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="14" height="16" viewBox="0 0 14 16" enable-background="new 0 0 14.001 16" xml:space="preserve"><path d="M13.8 10.2C14.2 10.6 14 11 13.4 11H6c-1.1 0-2-0.9-2-2H1v6.5C1 15.8 0.8 16 0.5 16S0 15.8 0 15.5v-15C0 0.2 0.2 0 0.5 0S1 0.2 1 0.5V1h5.5c1.1 0 2 0.9 2 2h4.9c0.6 0 0.8 0.4 0.4 0.8l-1.9 2.4c-0.3 0.4-0.3 1.2 0 1.6L13.8 10.2zM7.5 8V3c0-0.6-0.4-1-1-1H1v6H7.5zM12.4 10L11.2 8.4c-0.6-0.8-0.6-2 0-2.8L12.4 4H9.5h-1v5H5c0 0.6 0.4 1 1 1H12.4z"/></svg> Find a study space</a>
					<p>Quiet, group, and 24/7 study spaces available</p>
				</div><!-- end div.extra -->
			</div><!-- end div.hours-locations -->
		</div><!-- end div.col-1 -->
		<div class="col-2 flex-item">
			<div id="home-posts-news" class="posts--preview news-events">
				<h2>News &amp; events</h2>
				<div class="flex-container">
					<!-- loading element -->
					<div class="spinner">
						<div class="rect1"></div>
						<div class="rect2"></div>
						<div class="rect3"></div>
						<div class="rect4"></div>
						<div class="rect5"></div>
					</div>
				</div>
				<a href="/news" class="button-primary--orange link-news">All news &amp; events</a>
			</div><!-- end div.news-events -->
			<div class="guides-experts">
				<h2>Research guides &amp; experts</h2>
				<p class="caption">Specialized guides for every research interest.</p>
				<p class="caption">Not sure where to start? <a href="/ask" class="link-ask no-underline"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="16" height="16" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve"><path d="M16 5v2c0 2.8-2.2 5-5 5h-1l-5 4v-4c-2.7 0-5-2.2-5-5V5c0-2.7 2.3-5 5-5h6C13.8 0 16 2.3 16 5zM15 5c0-2.2-1.8-4-4-4H5C2.8 1 1 2.8 1 5v2c0 2.2 1.8 4 4 4h1v1 1.9l3.4-2.7L9.6 11H10h1c2.2 0 4-1.8 4-4V5zM13 4.8C13 4.9 12.9 5 12.8 5h-9.5C3.1 5 3 4.9 3 4.8S3.1 4.5 3.3 4.5h9.5C12.9 4.5 13 4.6 13 4.8zM13 7.3c0 0.1-0.1 0.3-0.2 0.3h-9.5C3.1 7.5 3 7.4 3 7.3S3.1 7 3.3 7h9.5C12.9 7 13 7.1 13 7.3z"/></svg> Ask Us</a></p>
				<div id="guide-list-home" class="guide-list">
				</div>
				<div class="experts-group flex-container">
					<div class="expert">
					</div>
					<div class="expert">
					</div>
					<div class="expert">
					</div>
					<div class="expert">
					</div>
				</div>
				<a href="/experts" class="button-primary--magenta view-experts">All <span class="count">32</span> experts</a>
			</div><!-- end div.guides-experts -->
		</div><!-- end div.col-2 -->
	</div><!-- end div.content-main -->

<?php 
	get_footer();
?>
