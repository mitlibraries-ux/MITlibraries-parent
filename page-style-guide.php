<?php
/**
 * Template Name: Style Guide
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
		<style>
			.guide-style > article {
				margin-bottom: 2em;
			}
			.guide-style .title-section {
				border-bottom: 5px solid #ccc;
			}
			#guide-colors {
				display: flex;
				flex-wrap: wrap;
			}
			#guide-colors h1 {
				width: 100%;
			}
			[class*="swatch-color"] {
				align-items: center;
				display: flex;
				height: 8em;
				justify-content: center;
				min-width: 8em;
			}
			.swatch-color--000 {
				background: #000;
				color: #f7f7f7;
			}
			.swatch-color--111 {
				background: #111;
				color: #f7f7f7;
			}
			.swatch-color--0088D0 {
				background: #0088D0;
			}
			.swatch-color--21759B {
				background: #21759B;
			}
			.swatch-color--338bc5 {
				background: #338bc5;
			}
			.swatch-color--333 {
				background: #333;
				color: #f7f7f7;
			}
			.swatch-color--595959 {
				background: #595959;
				color: #f7f7f7;
			}
			.swatch-color--CCC {
				background: #CCC;
			}
			.swatch-color--f3f3f3 {
				background: #f3f3f3;
			}
			.swatch-color--dedede {
				background: #dedede;
			}
			.swatch-color--ede8e2 {
				background: #ede8e2;
			}
			.swatch-color--c6b6a3 {
				background: #c6b6a3;
			}
			.swatch-color--43926a {
				background: #43926a;
			}
			.swatch-color--f58632 {
				background: #f58632;
			}
			.swatch-color--9c3273 {
				background: #9c3273;
			}
			.swatch-color--ffcc33 {
				background: #ffcc33;
			}
			.swatch-color--cca329 {
				background: #cca329;
			}
		</style>
		<div id="breadcrumb" class="inner hidden-phone" role="navigation" aria-label="breadcrumbs">
			<?php wsf_breadcrumbs(" &raquo; ", ""); ?>
		</div>

		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="contain-main" role="main">
	
			<div class="title-page">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			
			<div class="content-page">
				<div class="guide-style">
					<article id="guide-colors">
						<h1 class="title-section">Colors</h1>
						<div class="swatch-color--000">
							<span class="hex-color">#000</span>
						</div>
						<div class="swatch-color--111">
							<span class="hex-color">#111</span>
						</div>
						<div class="swatch-color--333">
							<span class="hex-color">#333</span>
						</div>
						<div class="swatch-color--595959">
							<span class="hex-color">#595959</span>
						</div>
						<div class="swatch-color--CCC">
							<span class="hex-color">#CCC</span>
						</div>
						<div class="swatch-color--f3f3f3">
							<span class="hex-color">#f3f3f3</span>
						</div>
						<div class="swatch-color--dedede">
							<span class="hex-color">#dedede</span>
						</div>
						<div class="swatch-color--338bc5">
							<span class="hex-color">#338bc5</span>
						</div>
						<div class="swatch-color--0088D0">
							<span class="hex-color">#0088D0</span>
						</div>
						<div class="swatch-color--21759B">
							<span class="hex-color">#21759B</span>
						</div>
						<div class="swatch-color--ede8e2">
							<span class="hex-color">#ede8e2</span>
						</div>
						<div class="swatch-color--c6b6a3">
							<span class="hex-color">#c6b6a3</span>
						</div>
						<div class="swatch-color--43926a">
							<span class="hex-color">#43926a</span>
						</div>
						<div class="swatch-color--f58632">
							<span class="hex-color">#f58632</span>
						</div>
						<div class="swatch-color--9c3273">
							<span class="hex-color">#9c3273</span>
						</div>
						<div class="swatch-color--ffcc33">
							<div class="hex-color">#ffcc33</div>
						</div>
						<div class="swatch-color--cca329">
							<div class="hex-color">#cca329</div>
						</div>
					</article>
					<article id="guide-headings">
						<h1 class="title-section">Headings</h1>
						<h1>Heading 1</h1>
						<h2>Heading 2</h2>
						<h3>Heading 3</h3>
						<h4>Heading 4</h4>
						<h5>Heading 5</h5>
						<h6>Heading 6</h6>
						<h2 class="title-section">...with class <code>entry-content</code></h2>
						<div class="entry-content">
							<h1>Heading 1</h1>
							<h2>Heading 2</h2>
							<h3>Heading 3</h3>
							<h4>Heading 4</h4>
							<h5>Heading 5</h5>
							<h6>Heading 6</h6>
						</div>
					</article>
					<article id="guide-links">
						<h1 class="title-section">Links</h1>
						<a href="#0">Lorem ipsum dolor</a>
						<a href="#0">Lorem ipsum dolor</a>
						<a href="#0">Lorem ipsum dolor</a>
						<a href="#0">Lorem ipsum dolor</a>
						<a href="#0">Lorem ipsum dolor</a>
						<a href="#0"><h1>Heading 1</h1></a>
						<a href="#0"><h2>Heading 2</h2></a>
						<a href="#0"><h3>Heading 3</h3></a>
						<a href="#0"><h4>Heading 4</h4></a>
						<a href="#0"><h5>Heading 5</h5></a>
						<a href="#0"><h6>Heading 6</h6></a>
						<h2 class="title-section">...with class <code>entry-content</code></h2>
						<div class="entry-content">
							<a href="#0">Lorem ipsum dolor</a>
							<a href="#0">Lorem ipsum dolor</a>
							<a href="#0">Lorem ipsum dolor</a>
							<a href="#0">Lorem ipsum dolor</a>
							<a href="#0">Lorem ipsum dolor</a>
							<a href="#0"><h1>Heading 1</h1></a>
							<a href="#0"><h2>Heading 2</h2></a>
							<a href="#0"><h3>Heading 3</h3></a>
							<a href="#0"><h4>Heading 4</h4></a>
							<a href="#0"><h5>Heading 5</h5></a>
							<a href="#0"><h6>Heading 6</h6></a>
						</div>
					</article>
					<article id="guide-paragraphs">
						<h1 class="title-section">Paragraphs</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque odio soluta fuga esse accusantium, voluptate, eos quod impedit! Quas cum saepe eaque quisquam culpa libero ipsum fuga necessitatibus tempore? Sequi!</p>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque laborum explicabo, praesentium commodi libero non odio totam quas culpa debitis dolores cupiditate eveniet vel, consequatur voluptatum? Alias quasi nesciunt, iusto.</em></p>
						<p><strong>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</strong></p>
						<p><em><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore saepe recusandae natus neque modi et minus, qui deleniti, sit voluptatibus laborum nemo quaerat dolorem id quam. Qui omnis incidunt illum.</strong></em></p>
						<h2 class="title-section">...with class <code>entry-content</code></h2>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque odio soluta fuga esse accusantium, voluptate, eos quod impedit! Quas cum saepe eaque quisquam culpa libero ipsum fuga necessitatibus tempore? Sequi!</p>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque laborum explicabo, praesentium commodi libero non odio totam quas culpa debitis dolores cupiditate eveniet vel, consequatur voluptatum? Alias quasi nesciunt, iusto.</em></p>
							<p><strong>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</strong></p>
							<p><em><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore saepe recusandae natus neque modi et minus, qui deleniti, sit voluptatibus laborum nemo quaerat dolorem id quam. Qui omnis incidunt illum.</strong></em></p>
						</div>
					</article>
					<article id="guide-links">
						<h1 class="title-section">Lists</h1>
						<h2 class="title-part">Standard list</h2>
						<ul>
						  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						  <li>Aliquam tincidunt mauris eu risus.</li>
						  <li>Vestibulum auctor dapibus neque.</li>
						  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						  <li>Aliquam tincidunt mauris eu risus.</li>
						  <li>Vestibulum auctor dapibus neque.</li>
						</ul>
						<h2 class="title-part">Nested list</h2>
						<ul>
						  <li>
						  	<ul>
								  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
								  <li>Aliquam tincidunt mauris eu risus.</li>
								  <li>Vestibulum auctor dapibus neque.</li>
								</ul>
							</li>
						  <li>Aliquam tincidunt mauris eu risus.</li>
						  <li>Vestibulum auctor dapibus neque.</li>
						  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						  <li>Aliquam tincidunt mauris eu risus.</li>
						  <li>Vestibulum auctor dapibus neque.</li>
						</ul>
						<h2 class="title-section">...with class <code>entry-content</code></h2>
						<div class="entry-content">
							<h3 class="title-part">Standard list</h3>
							<ul>
							  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
							  <li>Aliquam tincidunt mauris eu risus.</li>
							  <li>Vestibulum auctor dapibus neque.</li>
							  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
							  <li>Aliquam tincidunt mauris eu risus.</li>
							  <li>Vestibulum auctor dapibus neque.</li>
							</ul>
							<h3 class="title-part">Nested list</h3>
							<ul>
							  <li>
							  	<ul>
									  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
									  <li>Aliquam tincidunt mauris eu risus.</li>
									  <li>Vestibulum auctor dapibus neque.</li>
									</ul>
								</li>
							  <li>Aliquam tincidunt mauris eu risus.</li>
							  <li>Vestibulum auctor dapibus neque.</li>
							  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
							  <li>Aliquam tincidunt mauris eu risus.</li>
							  <li>Vestibulum auctor dapibus neque.</li>
							</ul>
						</div>
					</article>
					<article id="guide-mains">
						<h1 class="title-section">Mains</h1>
						<main>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi est corrupti, hic saepe ullam accusamus expedita. Sint obcaecati vitae sunt aut laborum blanditiis, veniam excepturi modi enim explicabo odit, facilis.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi saepe officiis, eum, praesentium eveniet vel. Rerum ea, voluptatem id provident, ducimus minus itaque inventore odit maiores, cupiditate laudantium nisi commodi.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci vero at libero officiis quia, facere officia sequi nulla animi facilis qui error eos dolore quasi, ea impedit, distinctio. Rem, aliquam.</p>
						</main>
					</article>
					<article id="guide-asides">
						<h1 class="title-section">Asides</h1>
						<h2>Default aside</h2>
						<aside>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptas distinctio dolores asperiores optio doloremque quae, vel animi, alias aliquam numquam, ex consequuntur nesciunt mollitia excepturi aut adipisci molestias illum!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui quisquam non eaque. Reiciendis corporis eius sit laboriosam non eaque itaque exercitationem alias. Consequatur quaerat dolor molestiae magni vel!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum error nam consequatur delectus, consequuntur, enim itaque cum excepturi voluptates vero quibusdam aperiam facilis ducimus iusto, nihil beatae doloremque ipsam pariatur.</p>
						</aside>
						<h2>Aside w/ class <code>widget</code>, nested in a <code>div.sidebar</code></h2>
						<div class="sidebar">
							<aside class="widget">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptas distinctio dolores asperiores optio doloremque quae, vel animi, alias aliquam numquam, ex consequuntur nesciunt mollitia excepturi aut adipisci molestias illum!</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui quisquam non eaque. Reiciendis corporis eius sit laboriosam non eaque itaque exercitationem alias. Consequatur quaerat dolor molestiae magni vel!</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum error nam consequatur delectus, consequuntur, enim itaque cum excepturi voluptates vero quibusdam aperiam facilis ducimus iusto, nihil beatae doloremque ipsam pariatur.</p>
							</aside>
							<aside class="widget">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptas distinctio dolores asperiores optio doloremque quae, vel animi, alias aliquam numquam, ex consequuntur nesciunt mollitia excepturi aut adipisci molestias illum!</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptate qui quisquam non eaque. Reiciendis corporis eius sit laboriosam non eaque itaque exercitationem alias. Consequatur quaerat dolor molestiae magni vel!</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum error nam consequatur delectus, consequuntur, enim itaque cum excepturi voluptates vero quibusdam aperiam facilis ducimus iusto, nihil beatae doloremque ipsam pariatur.</p>
							</aside>
						</div>
					</article>
					<article id="guide-sidebars">
						<h1 class="title-section">Sidebars</h1>
						<div class="sidebar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio labore maiores, culpa quis illum, nobis sunt velit maxime? Nostrum ipsum consequuntur distinctio, autem quod odio voluptatibus facilis. Error saepe, fuga.</p>
						</div>
					</article>
					<article id="guide-tables">
						<h1 class="title-section">Tables</h1>
						<table class="data">
						  <tr>
						    <th>Entry Header 1</th>
						    <th>Entry Header 2</th>
						    <th>Entry Header 3</th>
						    <th>Entry Header 4</th>
						  </tr>
						  <tr>
						    <td>Entry First Line 1</td>
						    <td>Entry First Line 2</td>
						    <td>Entry First Line 3</td>
						    <td>Entry First Line 4</td>
						  </tr>
						  <tr>
						    <td>Entry Line 1</td>
						    <td>Entry Line 2</td>
						    <td>Entry Line 3</td>
						    <td>Entry Line 4</td>
						  </tr>
						  <tr>
						    <td>Entry Last Line 1</td>
						    <td>Entry Last Line 2</td>
						    <td>Entry Last Line 3</td>
						    <td>Entry Last Line 4</td>
						  </tr>
						</table>
						<h2 class="title-section">...with class <code>entry-content</code></h2>
						<div class="entry-content">
							<table class="data">
							  <tr>
							    <th>Entry Header 1</th>
							    <th>Entry Header 2</th>
							    <th>Entry Header 3</th>
							    <th>Entry Header 4</th>
							  </tr>
							  <tr>
							    <td>Entry First Line 1</td>
							    <td>Entry First Line 2</td>
							    <td>Entry First Line 3</td>
							    <td>Entry First Line 4</td>
							  </tr>
							  <tr>
							    <td>Entry Line 1</td>
							    <td>Entry Line 2</td>
							    <td>Entry Line 3</td>
							    <td>Entry Line 4</td>
							  </tr>
							  <tr>
							    <td>Entry Last Line 1</td>
							    <td>Entry Last Line 2</td>
							    <td>Entry Last Line 3</td>
							    <td>Entry Last Line 4</td>
							  </tr>
							</table>
						</div>
					</article>
					<article id="guide-form-elements">
						<h1 class="title-section">Form elements</h1>
						<form action="#">
						  <div>
						    <label for="name">Text Input:</label>
						    <input type="text" name="name" id="name" placeholder="John Smith" />
						  </div>

						  <fieldset>
						    <legend>Radio Button Choice</legend>

						    <label for="radio-choice-1">Choice 1</label>
						    <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" />

						    <label for="radio-choice-2">Choice 2</label>
						    <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" />
						  </fieldset>

						  <div>
						    <label for="select-choice">Select Dropdown Choice:</label>
						    <select name="select-choice" id="select-choice">
						      <option value="Choice 1">Choice 1</option>
						      <option value="Choice 2">Choice 2</option>
						      <option value="Choice 3">Choice 3</option>
						    </select>
						  </div>

						  <div>
						    <label for="textarea">Textarea:</label>
						    <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
						  </div>

						  <div>
						    <label for="checkbox">Checkbox:</label>
						    <input type="checkbox" name="checkbox" id="checkbox" />
						  </div>

						  <div>
						    <input type="submit" value="Submit" />
						  </div>
						</form>
						<h2 class="title-section">...with class <code>entry-content</code></h2>
						<div class="entry-content">
							<form action="#">
							  <div>
							    <label for="name">Text Input:</label>
							    <input type="text" name="name" id="name" placeholder="John Smith" />
							  </div>

							  <fieldset>
							    <legend>Radio Button Choice</legend>

							    <label for="radio-choice-1">Choice 1</label>
							    <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" />

							    <label for="radio-choice-2">Choice 2</label>
							    <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2" />
							  </fieldset>

							  <div>
							    <label for="select-choice">Select Dropdown Choice:</label>
							    <select name="select-choice" id="select-choice">
							      <option value="Choice 1">Choice 1</option>
							      <option value="Choice 2">Choice 2</option>
							      <option value="Choice 3">Choice 3</option>
							    </select>
							  </div>

							  <div>
							    <label for="textarea">Textarea:</label>
							    <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
							  </div>

							  <div>
							    <label for="checkbox">Checkbox:</label>
							    <input type="checkbox" name="checkbox" id="checkbox" />
							  </div>

							  <div>
							    <input type="submit" value="Submit" />
							  </div>
							</form>
						</div>
					</article>
					<article id="guide-blockquotes">
						<h1 class="title-section">Blockquotes</h1>
						<blockquote>
							Lorem ipsum dolor sit amet, consectetuer 
							adipiscing elit. Aenean commodo ligula eget dolor. 
							Aenean massa <strong>strong</strong>. Cum sociis 
							natoque penatibus et magnis dis parturient montes, 
							nascetur ridiculus mus. Donec quam felis, ultricies 
							nec, pellentesque eu, pretium quis, sem. Nulla consequat 
							massa quis enim. Donec pede justo, fringilla vel, 
							aliquet nec, vulputate eget, arcu. In <em>em</em> 
							enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
							justo. Nullam <a class="external ext" href="#">link</a>
							dictum felis eu pede mollis pretium.
						</blockquote>
						<h2 class="title-section">...with class <code>entry-content</code></h2>
						<div class="entry-content">
							<blockquote>
								Lorem ipsum dolor sit amet, consectetuer 
								adipiscing elit. Aenean commodo ligula eget dolor. 
								Aenean massa <strong>strong</strong>. Cum sociis 
								natoque penatibus et magnis dis parturient montes, 
								nascetur ridiculus mus. Donec quam felis, ultricies 
								nec, pellentesque eu, pretium quis, sem. Nulla consequat 
								massa quis enim. Donec pede justo, fringilla vel, 
								aliquet nec, vulputate eget, arcu. In <em>em</em> 
								enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
								justo. Nullam <a class="external ext" href="#">link</a>
								dictum felis eu pede mollis pretium.
							</blockquote>
						</div>
					</article>
					<article id="guide-custom-buttons">
						<h1 class="title-section">Custom Buttons</h1>
						<a href="#0" class="button-primary--green">I'm a primary button</a>
						<a href="#0" class="button-primary--orange">I'm a primary button</a>
						<a href="#0" class="button-primary--magenta">I'm a primary button</a>
						<a href="#0" class="button-primary--blue">I'm a primary button</a>
						<a href="#0" class="button-secondary--green">I'm a secondary button</a>
						<a href="#0" class="button-secondary--orange">I'm a secondary button</a>
						<a href="#0" class="button-secondary--magenta">I'm a secondary button</a>
						<a href="#0" class="button-primary--blue border inline">Primary inline button</a>
						<a href="#0" class="button-primary--green full">Full width primary button</a>
						<a href="#0" class="button-primary--orange full">Full width primary button</a>
						<a href="#0" class="button-primary--magenta full">Full width primary button</a>
						<a href="#0" class="button-primary--blue full">Full width primary button</a>
					</article>
				</div>
			</div>

		</div>
		<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>