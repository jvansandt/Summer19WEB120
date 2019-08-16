<?php include "includes/bignav.php";?>

<main>
<h1>This is my flexbox page</h1>

<div class="left">
<h2>Utilization of the Flexbox</h2>

<p>The utilization of Flexboxes is an alternative way to organize content in a container in a flexible (per the name) manner for a responsive website (A Complete Guide to Flexbox). Containers displayed with the flex property can easily have their child content organized in a wrapping (or not, if you choose) fashion, vertically or horizontally, or displayed according to an abundance of other various organizational and positional characteristics.</p>

<p>According to the site css-tricks.com, flexboxes serve as a way to give the designer more efficient means of aligning and distributing content throughout a container for a responsive website, meaning it can be done easily with the infinite number of device screen sizes in mind. They recommend flexboxes for apps and smaller layouts, and using grids if you’re designing for something larger.</p>

<p>My favorite thing about creating flexboxes is that I don’t have to create @media queries, at least not for everything. It also gets around the necessity of some hacks and workarounds we typically use to get responsive design to work (Prechu). While the clearfix hack may be necessary when floating some content larger than its container because flexboxes can’t do everything, they appear to be a substantial tool in my web designer kit when that isn’t necessary.</p>

<p>As per usual, not all older browsers still in use natively support the flex property, so need to be appended with the associated prefix. Mozilla, the corporation known for the Firefox browser, says “Browser support for flexbox is excellent, and the majority of browsers do not need a prefix at this point. Safari was the last of the major browsers to remove prefixes, with the release of Safari 9 in 2015 (mdnwebdocs-bot, et al.).” They explain that IE10 needs the -ms- prefix and to use display: flexbox rather than flex, and the fourth most popular browser in the world (which I hadn’t even heard of till today), UC, needs the -webkit- prefix with display: box.</p>

<p>All in all this method of displaying content for a responsive website seems both incredibly easy to learn and efficient to use as an alternative to floats and grids, though they each have their preferred situations.</p>

</div>

<div class="right">
<h2>Cited Works</h2>

<p>“A Complete Guide to Flexbox: CSS-Tricks.” CSS, 8 Apr. 2013, css-tricks.com/snippets/css/a-guide-to-flexbox/.</p>
    
<p>mdnwebdocs-bot, et al. “Backwards Compatibility of Flexbox.” MDN Web Docs, 18 Mar. 2019, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox.</p>
    
<p>Prechu, Prasad G. “CSS Flexbox Resources – Tutorials, Tools, Grid & Generators.” CSS Author, 14 June 2019, cssauthor.com/css-flexbox/.</p>

</div>

<?php include "includes/footer.php";?>