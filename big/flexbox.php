
<?php include "includes/header.php";?>

    <p>Before the way to create layouts for the browsers were with floats and positioning, and they were limiting and hard to do but they worked. So that is why in October 2017 the W3C “created a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic (thus the word "flex"). The main idea behind the flex layout is to give the container the ability to alter its items' width/height (and order) to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). A flex container expands items to fill available free space or shrinks them to prevent overflow.” <sup>1</sup></p>
    <p>Some good points to use flexbox are:</p>
        <p>- Vertically centering a block of content inside its parent.</p>
        <p>- Vertically centering a block of content inside its parent.</p>
        <p>- Making all the children of a container take up an equal amount of the available width/height, regardless of how much width/height is available.</li>
        <p>- Making all columns in a multiple column layout adopt the same height even if they contain a different amount of content.<sup>2</sup></p>

    <p>Flex box includes set of properties because it is a whole module. Items will be laid out following either the main axis (from main-start to main-end) or the cross axis (from cross-start to cross-end).</p>
        <p><b>- main axis: </b>The main axis of a flex container is the primary axis along which flex items are laid out.</p>
        <p><b>- main-start | main-end: </b>The flex items are placed within the container starting from main-start and going to main-end.</p>
        <p><b>- main size: </b>A flex item's width or height, whichever is in the main dimension, is the item's main size.</p>
        <p><b>- cross axis:</b>The axis perpendicular to the main axis is called the cross axis. Its direction depends on the main axis direction.</p>
        <p>- cross-start | cross-end - Flex lines are filled with items and placed into the container starting on the cross-start side of the flex container and going toward the cross-end side.</li>
        <p><b>- cross size:</b> The width or height of a flex item, whichever is in the cross dimension, is the item's cross size. The cross-size property is whichever of ‘width’ or ‘height’ that is in the cross dimension.<sup>3</sup></p>


        


    </section>
    
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
    <aside id="cites">
        <img src="images/flex.png"  />
     <h3><br>Citations</h3>
        <dl>
            <dt><sup>1</sup>“A Complete Guide to Flexbox: CSS-Tricks.” CSS-TRICKS, 8 Apr. 2013, <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/.">https://css-tricks.com/snippets/css/a-guide-to-flexbox/. </a></dt>
            
        </dl>
        <dl>
            <dt><br><sup>2</sup> “Flexbox.” MDN Web Docs, <a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox.">https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox.</a></dt>
            
        </dl>
        <dl>
            <dt><br><sup>3</sup>“A Complete Guide to Flexbox: CSS-Tricks.” CSS-TRICKS, 8 Apr. 2013,  <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/.">https://css-tricks.com/snippets/css/a-guide-to-flexbox/.</a></dt>
            
        </dl>
    </aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>