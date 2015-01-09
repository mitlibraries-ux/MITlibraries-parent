<?php
/**
 * Template Name: Seach Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


$pageRoot = getRoot($post);
$section = get_post($pageRoot);
$isRoot = $section->ID == $post->ID;


 
get_header(); ?>
		
		<div id="stage" class="inner column3 tertiaryPage" role="main">

			<div id="search-main" class="search--lib-resources flex-container">
				<h2>Search</h2>
				<div class="wrap-select--resources">
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
				<span class="label">for</span>
				<form id="bartonplus" class="input-submit flex-container active">
					<div class="hidden-fields"></div>
					<input type="text" class="option-1 active" placeholder="ex: carbon nanotubes" autofocus="autofocus" tabindex="1">
					<button type="submit">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
							<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
						</svg>
					</button>
				</form>
				<form id="vera">
					<div class="hidden-fields"></div>
					<input type="text" class="option-2" placeholder="ex: new eng j of med, AIP conf proc">
					<button type="submit">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
							<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
						</svg>
					</button>
				</form>
				<form id="barton">
					<div class="hidden-fields"></div>
					<input type="text" class="option-3 searchtext" id="bookrequest" placeholder="ex: carbon nanotubes, game design">
					<button type="submit">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
							<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
						</svg>
					</button>
				</form>
				<form id="worldcat">
					<div class="hidden-fields"></div>
					<input type="text" class="option-4" placeholder="ex: carbon nanotubes, game design">
					<button type="submit">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
							<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
						</svg>
					</button>
				</form>	
				<form id="course-reserves">
					<div class="hidden-fields"></div>
					<input type="text" id="coursereservesrequest" value="" class="option-5 searchtext" placeholder="ex: 18.01, STS.320, 21F.108">
					<button type="submit">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
							<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
						</svg>
					</button>
				</form>
				<form id="site-search">
					<div class="hidden-fields"></div>
					<input type="text" class="option-6" placeholder="ex: hours">
					<button type="submit">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="16" viewBox="0 0 12 12" alt="search" class="icon-search">
							<path d="M7.273 0.727q1.187 0 2.19 0.585t1.588 1.588 0.585 2.19-0.585 2.19-1.588 1.588-2.19 0.585q-1.278 0-2.33-0.676l-3.284 3.301q-0.295 0.284-0.688 0.284-0.403 0-0.688-0.284t-0.284-0.688 0.284-0.688l3.301-3.284q-0.676-1.051-0.676-2.33 0-1.188 0.585-2.19t1.588-1.588 2.19-0.585zM7.273 8q0.591 0 1.128-0.23t0.929-0.622 0.622-0.929 0.23-1.128-0.23-1.128-0.622-0.929-0.929-0.622-1.128-0.23-1.128 0.23-0.929 0.622-0.622 0.929-0.23 1.128 0.23 1.128 0.622 0.929 0.929 0.622 1.128 0.23z"></path>
						</svg>
					</button>
				</form>
				<span class="label">by</span>
				<div class="wrap-select--keywords flex-container active">
					<select name="" id="" class="keywords option-1 search-by active" tabindex="3" autocomplete="off">
						<option value="">Keyword</option>
						<option value="TI ">Title</option>
						<option value="AU ">Author</option>
					</select>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
				</div>
				<div class="wrap-select--keywords flex-container long">
					<select name="" id="" class="keywords search-by option-2" tabindex="3" autocomplete="off">
						<option value="contains">Partial Words In Title</option>
						<option value="startsWith">Title Starts With</option>
						<option value="exactMatch">Exact Title</option>
					</select>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
				</div>
				<div class="wrap-select--keywords flex-container long">
					<select name="" id="" class="keywords search-by option-3" tabindex="3" autocomplete="off">
						<option value="find_WRD">Keyword</option>
						<option value="scan_TTL">Title starts with</option>
						<option value="scan_AUT">Author (last name first)</option>
						<option value="scan_CND">Call number starts with</option>
					</select>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
				</div>
				<div class="wrap-select--keywords flex-container">
					<select name="" id="" class="keywords search-by option-4" tabindex="3" autocomplete="off">
						<option value="keyword">Keyword</option>
						<option value="author">Author</option>
						<option value="title">Title</option>
					</select>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
				</div>
				<div class="wrap-select--keywords flex-container long">
					<select name="" id="" class="keywords search-by option-5" tabindex="3" autocomplete="off">
						<option value="scan_CNB">Course number starts with</option>
						<option value="find_WIN">Instructor keyword</option>
						<option value="find_WOU">Course name keyword</option>
					</select>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="8.071px" height="14px" viewBox="0 0 8.071 14" enable-background="new 0 0 8.071 14" xml:space="preserve" class="select-arrows"><path d="M0.069 8.74c0.08-0.159 0.252-0.264 0.436-0.274 0.023 0 1.743-0.104 3.531-0.104s3.508 0.104 3.53 0.104C7.751 8.476 7.911 8.581 8.003 8.74c0.092 0.161 0.092 0.356 0 0.517 -1.364 2.431-3.508 4.517-3.6 4.598 -0.206 0.194-0.528 0.194-0.734 0 -0.091-0.081-2.235-2.167-3.6-4.598C-0.023 9.096-0.023 8.901 0.069 8.74M8.003 5.259c-0.08 0.16-0.252 0.264-0.437 0.275 -0.022 0-1.742 0.103-3.53 0.103S0.528 5.535 0.505 5.535C0.321 5.523 0.161 5.419 0.069 5.259c-0.092-0.161-0.092-0.355 0-0.516 1.365-2.431 3.508-4.517 3.6-4.598 0.206-0.194 0.528-0.194 0.734 0 0.092 0.081 2.235 2.167 3.6 4.598C8.095 4.904 8.095 5.099 8.003 5.259"/></svg>
				</div>
				<div class="wrap-select--keywords flex-container">
					<select name="" id="" class="keywords search-by option-6" tabindex="3" disabled>
						<option value="keyword">Keyword</option>
					</select>
				</div>
				<a href="http://libraries.mit.edu/bartonplus-advanced" class="search-advanced bartonplus active">Go to BartonPlus advanced search</a>
				<a href="http://libraries.mit.edu/barton-advanced" class="search-advanced barton">Go to Barton advanced search</a>
				<a href="http://mit.worldcat.org/advancedsearch" class="search-advanced worldcat">Go to WorldCat advanced search</a>
				<a href="http://libraries.mit.edu/barton-reserves" class="search-advanced course-reserves">Go to Course Reserves advanced search</a>
			</div><!-- end div.search-main -->

			<div id="breadcrumb" class="inner hidden-phone" role="navigation" aria-label="breadcrumbs">
				<?php wsf_breadcrumbs(" &raquo; ", ""); ?>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
	
			<div class="title-page">
				<?php if ($isRoot): ?>
				<h1><?php echo $section->post_title; ?></h1>
				<?php else: ?>
				<h1><a href="<?php echo get_permalink($section->ID) ?>"><?php echo $section->post_title; ?></a></h1>
				<?php endif; ?>
			</div>
			
			<div class="content-main flex-container">
				<?php get_template_part( 'content', 'pagefull' ); ?>
			</div>
		</div>
		<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>