<?php  
if ( !defined( 'ABSPATH' ) ) exit;
// Help Content
?>
<!-- BEGIN tab -->
<h3 id="ctc_getting_started">Start Here</h3>
<p><strong style="font-size:large">10 Easy Steps to Create a Child Theme:</strong></p>
<ol>
  <li><strong>Select the theme</strong> you want to configure from the &quot;Parent Theme&quot; menu.</li>
  <li><strong>Select &quot;new&quot; or &quot;existing&quot;.</strong>
    <ul>
      <li>If there are currently no child themes available, the &quot;Child Theme&quot; and &quot;Child Theme Names&quot; will be entered for you automatically based on the parent theme selected. You may edit these if you like, but they cannot be the same as an existing theme.</li>
      <li>If there are existing child themes available, there will be an additional menu labeled &quot;Use Existing Child Theme&quot; from which you can select, or enter a new value in the input box to create a new one.</li>
    </ul>
  </li>
  <li><strong>Optional: Enter a Theme Name, Theme Website, Author, Author Website, Descriptiont, Tags and Version</strong> for the child theme. If using an existing child theme, they will be entered automatically  based on the child theme selected.</li>
  <li><strong>Choose how WordPress should handle the parent theme stylesheet:</strong> 
    <ul>
      <li><strong>Enqueue parent stylesheet (default):</strong> Select this option if the parent theme enqueues the stylesheet but has no special handling for child themes. Start with this option if unsure.</li>
      <li><strong>@import parent stylesheet:</strong> Select this option if the parent theme links the stylesheet in the header template. Using @import is discouraged but necessary in this case unless you modify the header template.</li>
      <li><strong>Enqueue child stylesheet:</strong> Select this option if the parent theme incorrectly loads the "template" stylesheet or does not load the "style.css" file at all. This is unusual but occurs in some themes.</li>
      <li><strong>None (handled by theme):</strong> Select this option if all stylesheets are automatically loaded for child themes (e.g., "Responsive" by CyberChimps).</li>
    </ul></li>
  <li><strong>Use Parent Options (optional)</strong> If you want to maintain the same theme options as the parent theme, check "Copy Parent Theme Menus, Widgets and other Options". Depending on the theme, some options may need to be applied using separate theme option controls. <strong>NOTE: This will overwrite any child theme options you may have already set.</strong></li>
  <li><strong>Save Backup (optional)</strong> If using an existing child theme, you can check "Backup Stylesheet", to create a backup of the child theme stylesheet in the child theme directory.</li>
  <li><strong>Restore from backup (optional - new in version 1.6.0):</strong> If using an existing child theme, you can choose whether to reload the current child theme stylesheet (leave unchanged), reset all values, or restore it from a backup. If there are backup files available, they will appear as radio button options.</li>
  <li><strong>Choose additional stylesheets</strong> If your theme uses additional stylesheets, you can open the &quot;Parse Additional Stylesheets&quot; toggle and they will appear as checkbox options. Stylesheets that are being used by the parent theme should be automatically selected for you. Only select additional stylesheets you wish to customize to reduce overhead. <strong>NOTE: If the parent theme uses Bootstrap stylesheets, they will not be automatically selected.</strong> You can select Bootstrap stylesheets manually if you need to customize them, but in most cases they add unecessary overhead to the configuration data.</li>
  <li><strong>Click "Generate/Rebuild Child Theme Files."</strong></li>
  <li><strong>IMPORTANT: <a target="_blank" href="http://www.lilaeamedia.com/plugins/child-theme-configurator/#preview_activate" title="Test your child theme before activating!">Always test your child theme with Live Preview before activating!</a></strong></li>
</ol>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_tutorial">Tutorial Video</h3>
<iframe src="//fast.wistia.net/embed/iframe/c0fbu8jhtj" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_query_selector">Query/Selector Tab</h3>
<p>There are two ways to identify and override parent styles. The Child Theme Configurator lets you search styles by <strong>selector</strong> and by <strong>rule</strong>. If you wish to change a specific selector (e.g., h1), use the "Query/Selector" tab. If you have a specific value you wish to change site-wide (e.g., the color of the type), use the "Rule/Value" tab.</p>
<p>The Query/Selector tab lets you find specific selectors and edit them. First, find the query that contains the selector you wish to edit by typing in the <strong>Query</strong> autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys. Selectors are in the <strong>base</strong> query by default.</p>
<p>Next, find the selector by typing in the <strong>Selector</strong> autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys.</p>
<p>This will load all of the rules for that selector with the Parent values on the left and the Child values inputs on the right. Any existing child values will be automatically populated. There is also a Sample preview that displays the combination of Parent and Child overrides. Note that the <strong>border</strong> and <strong>background-image</strong> get special treatment.</p>
<p>The "Order" field contains the original sequence of the selector in the parent theme stylesheet. You can change the selector order sequence by entering a lower or higher number in the "Order" field. You can also force style overrides (so called "!important" flag) by checking the "!" box next to each input. Please use judiciously.</p>
<p>Click "Save" to update the child stylesheet and save your changes to the WordPress admin.</p>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_new_styles">Adding New Styles</h3>
<p>If you wish to add additional rules to a given selector, first load the selector using the Query/Selector tab. Then find the rule you wish to override by typing in the <strong>New Rule</strong> autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys. This will add a new input row to the selector inputs.</p>
<p>If you wish to add completely new selectors, or even new @media queries, you can enter free-form CSS in the "Raw CSS" textarea. Be aware that your syntax must be correct (i.e., balanced curly braces, etc.) for the parser to load the new styles. You will know it is invalid because a red "X" will appear next to the save button.</p>
<p>If you prefer to use shorthand syntax for rules and values instead of the inputs provided by the Child Theme Configurator, you can enter them here as well. The parser will convert your input into normalized CSS code automatically.</p>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_rule_value">Rule/Value Tab</h3>
<p>There are two ways to identify and override parent styles. The Child Theme Configurator lets you search styles by <strong>selector</strong> and by <strong>rule</strong>. If you wish to change a specific selector (e.g., h1), use the "Query/Selector" tab. If you have a specific value you wish to change site-wide (e.g., the color of the type), use the "Rule/Value" tab.</p>
<p>The Rule/Value tab lets you find specific values for a given rule and then edit that value for individual selectors that use that rule/value combination. First, find the rule you wish to override by typing in the <strong>Rule</strong> autoselect box. Select by clicking with the mouse or by pressing the "Enter" or "Tab" keys.</p>
<p>This will load all of the unique values that exist for that rule in the parent stylesheet with a Sample preview for that value. If there are values that exist in the child stylesheet that do not exist in the parent stylesheet, they will be displayed as well.</p>
<p>For each unique value, click the "Selectors" link to view a list of selectors that use that rule/value combination, grouped by query with a Sample preview of the value and inputs for the child value. Any existing child values will be automatically populated.</p>
<p>Click "Save" to update the child stylesheet and save your changes to the WordPress admin.</p>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_imports">@import Tab and Web Fonts</h3>
<p>You can add additional stylesheets and web fonts by typing @import rules into the textarea on the @import tab. <strong>Important: do not import the parent theme stylesheet here. Use the &quot;Parent stylesheet handling&quot; option from the Parent/Child tab.</strong></p>
<p>Below is an example that loads a local custom stylesheet (you would have to add the "fonts" directory and stylesheet) as well as the web font "Open Sans" from Google Web Fonts:</p>
<blockquote>
  <pre><code>
@import url(fonts/stylesheet.css);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic);
</code></pre>
</blockquote>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_files">Files Tab</h3>
<h5>Parent Templates</h5>
<p>Copy PHP template files from the parent theme by checking the boxes and clicking "Copy Selected to Child Theme" and the templates will be added to the child theme directory.</p>
<p><strong>CAUTION: If your child theme is active, the child theme version of the file will be used instead of the parent immediately after it is copied.</strong></p>
<p>The <code>functions.php</code> file is generated separately and cannot be copied here.</p>
<h5>Child Theme Files</h5>
<p>Templates copied from the parent and any stylesheet backups are listed here. Templates can be edited using the Theme Editor in the Appearance Menu.</p>
<p>Remove child theme files by checking the boxes and clicking "Delete Selected".</p>
<h5>Child Theme Images</h5>
<p>Theme images reside under the <code>images</code> directory in your child theme and are meant for stylesheet use only. Use the media gallery for content images.</p>
<p>You can upload new images using the image upload form. Remove child theme images by checking the boxes and clicking "Delete Selected".</p>
<h5>Child Theme Screenshot</h5>
<p>You can upload a custom screenshot for the child theme here.</p>
<p>The theme screenshot should be a 4:3 ratio (eg., 880px x 660px) JPG, PNG or GIF. It will be renamed <code>screenshot</code>.</p>
<h5>Export Child Theme as Zip Archive </h5>
<p>You can download your child theme for use on another WordPress site by clicking "Export".</p>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_preview">Preview and Activate</h3>
<p><strong>IMPORTANT: <a target="_blank" href="http://www.lilaeamedia.com/plugins/child-theme-configurator/#preview_activate" title="Test your child theme before activating!">Test your child theme before activating!</a></strong> Some themes (particularly commercial themes) do not correctly load parent template files or automatically load child theme stylesheets or php files. <strong>In the worst cases they will break your website when you activate the child theme.</strong></p>
<ol>
  <li>Navigate to Appearance > Themes in the WordPress Admin. You will now see the new Child Theme as one of the installed Themes.</li>
  <li>Click "Live Preview" below the new Child Theme to see it in action.</li>
  <li>When you are ready to take the Child Theme live, click "Activate."</li>
</ol>
<p><strong>MULTISITE USERS:</strong> You must Network Enable your child theme before you can use Live Preview. Go to 'Themes' in the Network Admin.</p>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_permissions">File Permissions</h3>
<p>WordPress was designed to work on a number of server configurations. Child Theme Configurator uses the WordPress Filesystem API to allow changes to sites that require user permission to edit files.</p>
<p>However, because most of the functionality occurs via AJAX (background) requests, the child theme stylesheet must be writable by the web server.</p>
<p>The plugin will automatically detect your configuration and provide a number of options to resolve this requirement. Use the links provided to find out more about the options available, including:</p>
<ol>
  <li>Temporarily making the stylesheet writable through the plugin.</li>
  <li>Adding your FTP/SSH credentials to the WordPress config file.</li>
  <li>Setting the stylesheet write permissions on the server manually</li>
  <li>Configuring your web server to allow write access in certain situations.</li>
</ol>
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_faq">FAQs</h3>
<h5 id="broken_theme">HELP! I changed a file and now I am unable to access my website or login to wp-admin to fix it!</h5>
<p>To back out of a broken theme you have to manually rename the offending theme directory name (via FTP, SSH or your web host control panel file manager) so that WordPress can't find it. WordPress will then throw an error and revert back to the default theme (currently twenty-fourteen).</p>

<p>The child theme is in your themes folder, usually</p>

<code>[path/to/wordpress]/wp-content/themes/[child-theme]</code>

<p>To prevent this in the future, always test your child themes with Live Preview before activating them.</p> 

<h5 id="menus_broken">Why are my menus displaying incorrectly when I activate the new child theme?</h5>...or...
<h5 id="header_broken">Why is my custom header missing when I activate the new child theme?</h5>...or...
<h5 id="background_broken">Why does my custom background go back to the default when I activate the new child theme?</h5>...or...
<h5 id="options_broken">Why do my theme options disappear when I activate the new child theme?</h5>
<p>These options are specific to each theme and are saved separately in the database. When you create a new child theme, its options are blank.</p>

<p><strong>Many of these options can be copied over to the child theme by checking "Copy Parent Theme Menus, Widgets and other Options" when you generate the child theme files on the Parent/Child tab.</strong></p>

<p>If you want to set different options you can either apply them after you activate the child theme, or by using the "Live Preview" under Appearance > Themes.</p>
<ul class="instructions">
	<li><strong>Menus: </strong> Go to Appearance > Menus and click the "Locations" tab. By default, the primary menu will generate the links automatically from the existing pages. Select your customized Menu from the dropdown and click "Use New Menu." This will replace the default menu and you will see the correct links.</li>

	<li><strong>Header: </strong> Go to Appearance > Header. Some themes will show the "Title" and "Tagline" from your "General Settings" by default. Click "Choose Image" and find the header from the Media Library or upload a new image. This will replace default with your custom image.</li>

	<li><strong>Background: </strong> Go to Appearance > Background and choose a new background color or image.</li>

	<li><strong>Options: </strong> Every theme handles options in its own way. Most often, they will create a set of options and store them in the WordPress database. Some options are specific to the active theme (or child theme), and some are specific to the parent theme only (meaning the child theme CANNOT override them). You will have to find out from the theme author which are which.</li>
</ul>
</p> 
<h5 id="existing_parent">How do I move changes I have already made to a Child Theme?</h5>
<p>Follow <a href="http://www.lilaeamedia.com/plugins/child-theme-configurator#child_from_modified_parent" class="scroll-to">these steps</a>. </p>
<h5 id="web_fonts">How do I add Web Fonts?</h5>
<p>The easiest method is to paste the @import code provided by <a href="http://www.google.com/fonts" title="Google Fonts">Google</a>, <a href="http://www.fontsquirrel.com/" title="Font Squirrel">Font Squirrel</a> or any other Web Font site into the @import tab. The fonts will then be available to use as a value of the <strong>font-family</strong> rule. Be sure you understand the license for any embedded fonts. </p>
<p>You can also create a secondary stylesheet that contains @font-face rules and import it using the @import tab. </p>
<h5 id="plugin">Does it work with plugins?</h5>
<p>We offer a premium extension to let you easily modify styles for any WordPress Plugin installed on your website. The Child Theme Configurator Plugin Extension scans your plugins and allows you to create custom stylesheets in your Child Theme. <a href="http://www.lilaeamedia.com/plugins/child-theme-plugin-styles/" title="Take Control of your Plugin Styles with Child Theme Configurator Plugin Extension for WordPress">Learn more <i class="genericon genericon-next"></i></a> 
<h5 id="doesnt_work">Why doesn't this work with my (insert theme vendor here) theme?</h5>
<p>Some themes (particularly commercial themes) do not correctly load parent template files or automatically load child theme stylesheets or php files.</p><p>This is unfortunate, because in the best case they effectively prohibit the webmaster from adding any customizations (other than those made through the admin theme options) that will survive past an upgrade. <strong>In the worst case they will break your website when you activate the child theme.</strong> </p>
<p>Contact the vendor directly to ask for this core functionality. It is our opinion that ALL themes (especially commercial ones) must pass the Theme Unit Tests outlined by WordPress.org. </p>
<h5 id="missing_parent">Why doesn't the Parent Theme have any styles when I "View Parent CSS"?</h5>
<p>Your Parent theme is probably using a separate location for the stylesheets. Select individual stylesheets from the "Parse Additional Stylesheets" section of the Parent/Child tab and click "Generate Child Theme Files" again. </p>
<h5 id="performance">Will this slow down my site?</h5>
Once the child theme stylesheet is created, CTC adds very little overhead to the front-end since all of the functionality is in the admin.

The plugin only loads the bulk of the code in the admin when you are using the tool. The biggest performance hit occurs when you generate the Child Theme files from the Parent/Child tab. </p>
<h5 id="where_are_styles">Where are the styles? The configurator doesn't show anything!</h5>
<p>All of the styles are loaded dynamically. You must start typing in the text boxes to select styles to edit.</p>
<p>"Base" is the query group that contains styles that are not associated with any particular "At-rule."</p>
<p>Start by clicking the "Query/Selector" tab and typing "base" in the first box. You can then start typing in the second box to retrieve the style selectors to edit. </p>
<h5 id="preview-not-loading">Why do the preview tabs return "Stylesheet could not be displayed"?</h5>
<p>You have to load a child theme from the Parent/Child tab for the preview to display. This can also happen when your WP_CONTENT_URL is different than $bloginfo('site_url'). Ajax cannot make cross-domain requests by default. Check that your Settings > General > "WordPress Address (URL)" value is correct. (Often caused by missing "www" in the domain.) </p>
<h5 id="edit_manually">Can I edit the Child Theme stylesheet manually offline or by using the Editor or do I have to use the Configurator?</h5>
<p>You can make any manual changes you wish to the stylesheet. Just make sure you import the revised stylesheet using the Parent/Child panel or the Configurator will overwrite your changes the next time you use it. Just follow the steps as usual but select the "Use Existing Child Theme" radio button as the "Child Theme" option. The Configurator will automatically update its internal data from the new stylesheet. </p>
<h5 id="update_child">If the parent theme changes (e.g., upgrade), do I have to update the child theme?</h5>
<p>No. This is the point of using child themes. Changes to the parent theme are automatically inherited by the child theme.</p>
<p>A child theme is not a "copy" of the parent theme. It is a special feature of WordPress that let's you override specific styles and functions leaving the rest of the theme intact. The only time you need to make changes after an upgrade is if the parent removes or changes style or function names. Quality themes should identify any deprecated functions or styles in the upgrade notes so that child theme users can make adjustments accordingly. </p>
<h5 id="functions">Where are the .php files?</h5>
<p>The configurator automatically adds a blank functions.php file to the child theme directory. You can copy parent theme template files using the Files tab. If you want to create new templates and directories you will have to create/upload them manually via FTP or SSH. Remember that a child theme will automatically inherit the parent theme's templates unless they also exist in the child theme directory. Only copy templates that you intend to customize.</p>
<h5 id="specific_color">How do I change a specific color/font style/background?</h5>
<p>You can override a specific value globally using the Rule/Value tab. See Rule/Value, above.</p>
<h5 id="add_styles">How do I add styles that aren't in the Parent Theme?</h5>
<p>You can add queries and selectors using the "Raw CSS" textarea on the Query/Selector tab. See Query/Selector, above. </p>
<h5 id="add_styles">How do I remove a style from the Parent Theme?</h5>
<p>You shouldn't really "remove" a style from the Parent. You can, however, set the rule to "inherit," "none," or zero (depending on the rule). This will negate the Parent value. Some experimentation may be necessary.</p>
<h5 id="remove_styles">How do I remove a style from the Child Theme?</h5>
<p>Delete the value from the input for the rule you wish to remove. The Child Theme Configurator only adds overrides for rules that contain values. </p>
<h5 id="important_flag">How do I set the !important flag?</h5>
<p>We always recommend relying on good cascading design over global overrides. To that end, you have ability to change the load order of child theme styles by entering a value in the "Order" field. And yes, you can now set rules as important by checking the "!" box next to each input. Please use judiciously. </p>
<h5 id="gradients">How do I create cross-browser gradients?</h5>
<p>The Child Theme Configurator uses a standardized syntax for gradients and only supports two-color gradients without intermediate stops. The inputs consist of origin (e.g., top, left, 135deg, etc.), start color and end color. The browser-specific syntax is generated automatically when you save these values. See Caveats, below, for more information. </p>
<h5 id="responsive">How do I make my Theme responsive?</h5>
<p>The short answer is to use a responsive Parent Theme. Some common methods for responsive design are:
<ul class="instructions"><li>Avoiding fixed width and height values. Using max- and min-height values and percentages are ways to make your designs respond to the viewer's browser size.</li>
<li>Combining floats and clears with inline and relative positions allow the elements to adjust gracefully to their container's width.</li>
<li>Showing and hiding content with Javascript.</li></ul> 
<p>We've put together a video tutorial that shows how to use Child Theme Configurator to make a fixed-width theme responsive.</p>
<iframe width="560" height="315" src="//www.youtube.com/embed/iBiiAgsK4G4?rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe> 
<!-- END tab --> 
<!-- BEGIN tab -->
<h3 id="ctc_glossary">Glossary</h3>
<ul>
  <li id="parent_theme"><strong>Parent Theme</strong> The WordPress Theme you wish to edit. WordPress first loads the Child Theme, then loads the Parent Theme. If a style exists in the Child Theme, it overrides the Parent Theme.</li>
  <li id="child_theme"><strong>Child Theme</strong> New Theme based on Parent Theme. You can create any number of Child Themes from a single Parent Theme.</li>
  <li id="class"><strong>Class</strong> A term used to organize objects. For example, a &lt;div&gt; might be assigned the "blue-text" class. The stylesheet might then assign the "color: blue;" rule to members of the "blue-text" class. Thus, the &lt;div&gt; would display text as blue in the browser.</li>
  <li id="selector"><strong>Selector</strong> One or more html elements, classes, ids or other terms used to identify groups of objects.</li>
  <li id="rule"><strong>Rule</strong> One of many standardized attributes used to tell the browser how to display objects matching a given selector. Examples are <strong>color</strong>, <strong>background-image</strong> and <strong>font-size</strong>.</li>
  <li id="at-rule"><strong>At-rule</strong> CSS browser instruction to extend default functionality. The Child Theme Configurator supports two At-rules:
    <ul>
      <li id="import"><strong>@import</strong> Instructs the browser to load additional CSS information from an external source.</li>
      <li id="query"><strong>@media (Media Query)</strong> Identifies blocks of styles that are used only when certain browser characteristics are true. Examples are max-width, screen and print.</li>
    </ul>
  </li>
  <li id="override"><strong>Override</strong> When a selector exists in both the Child Theme and the Parent Theme, the Child Theme takes priority over the Parent theme. This is where the Child Theme Configurator stands out: it helps you create <strong>exact overrides</strong> of selectors from the Parent Theme, eliminating hours of trial and error.</li>
</ul>
<!-- END tab -->
<h3 id="ctc_help_sidebar">Links</h3>
<!-- BEGIN sidebar -->
<h4>Our plugins will not nag you for donations...</h4>
<span style="font-size:smaller">...but we LOVE referrals.</span><br/><a href="http://wordpress.org/support/view/plugin-reviews/child-theme-configurator?rate=5#postform">Give Us 5 Stars</a>
<h4>Introducing CTC Pro</h4>
<a href="http://www.lilaeamedia.com/child-theme-configurator-pro/" title="<?php _e( 'Learn more about CTC Pro', 'chld_thm_cfg' ); ?>"><img src="<?php echo CHLD_THM_CFG_URL . 'css/pro-banner.jpg'; ?>" width="150" height="48" /></a>
<p style="font-size:smaller">Designed by WordPress developers who use it every day, CTC Pro adds plugin stylesheets and other features to make design work quicker and easier. This is a free upgrade for users that purchased the Plugins Extension. <a href="http://www.lilaeamedia.com/plugins/child-theme-configurator-pro" title="Child Theme Configurator Pro">Learn more</a></p>
<ul>
  <li><a href="http://www.lilaeamedia.com/about/contact/">Contact us</a></li>
  <li><a href="http://www.lilaeamedia.com/plugins/child-theme-configurator">Plugin Website</a></li>
  <li><a href="http://codex.wordpress.org/Child_Themes">WordPress Codex</a></li>
  <li><a href="http://wordpress.stackexchange.com/">WordPress Answers</a></li>
</ul>
<!-- END sidebar -->