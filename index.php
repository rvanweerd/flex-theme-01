<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Flexbox
 * @since Flexbox 0.0.1
 */
get_header(); 

?>

    <header id="masthead" class="site-header" role="banner">
        <img src="http://lorempixel.com/1920/450/nightlife" />
    </header>
    
    <aside class="first">
        <div class="widget left">
            <h4 class="widget-title">widget left</h4>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla dignissim elit id dictum. Cras a justo nisl. Vestibulum leo eros, cursus sed luctus vitae, mattis nec lectus. Sed aliquet quam a justo bibendum convallis. In interdum imperdiet tortor, vitae facilisis turpis laoreet a. Nulla ac urna id enim commodo lobortis venenatis non velit. In ultrices mauris tempor elit venenatis, vel suscipit sapien tempus. Aliquam erat volutpat. Aliquam molestie lectus in tempus varius. 
        </div>
        
        <div class="widget center">
            <h4 class="widget-title">widget center</h4>
            Cras tincidunt leo vitae tellus vehicula, non vehicula elit euismod. Morbi semper arcu at consectetur facilisis.
        </div>
        
        <div class="widget right">
            <h4 class="widget-title">widget right</h4>
            Phasellus ut eros felis. Aenean tincidunt purus ac mi viverra placerat. Sed blandit sapien vel viverra ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi condimentum, odio eu accumsan aliquam, quam mauris blandit eros, sit amet sagittis mauris dui at nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus at nunc in augue tempor blandit. Cras porta, nisi vel sagittis eleifend, eros massa pellentesque nisi, nec imperdiet augue magna sed tortor. Ut ut elementum felis. Aliquam euismod magna id velit pretium, in tincidunt libero bibendum. Donec tempus feugiat scelerisque. Donec lobortis tempus velit, at aliquet odio lobortis ut. Curabitur quis justo nisi. Praesent varius venenatis massa sit amet pulvinar. Morbi sit amet orci tortor. 
        </div>
    </aside>

    <div id="main-content" class="main-content">

        <div id="content" class="site-content" role="main">
            <h4>The content</h4>
             Maecenas eu enim et nisi placerat accumsan id quis tortor. Phasellus dignissim urna ac ipsum vehicula, a tempor leo facilisis. Morbi aliquet ut nisl ac blandit. Nulla hendrerit est quam, nec vestibulum magna cursus at. Morbi malesuada eros turpis, et aliquet nisi congue non. Pellentesque urna quam, sagittis eget dolor vestibulum, adipiscing ornare lorem. Integer sit amet rutrum ante. Aliquam at enim imperdiet, placerat urna sed, volutpat diam. Sed pellentesque ligula lorem, quis ornare quam malesuada vitae. Donec iaculis tempor elit at interdum.

Aenean eu libero eleifend, lobortis dui vel, vehicula arcu. Curabitur ultricies erat magna, vel dictum metus venenatis lacinia. Nulla magna diam, congue ut massa a, malesuada congue purus. Nunc id sollicitudin sapien. Pellentesque aliquam odio mi, sed convallis turpis malesuada ut. Quisque non quam justo. Donec sed sagittis nunc. Morbi adipiscing erat sit amet nulla posuere vulputate. In et pellentesque sapien. Proin aliquet ultrices sem. Vivamus hendrerit, arcu ac vulputate mattis, metus urna aliquam neque, eu aliquet sapien elit eget lorem. Phasellus pellentesque scelerisque augue, ut fringilla nunc porta at. Quisque hendrerit lacus at pretium porta.

Suspendisse sit amet justo feugiat diam blandit elementum. Donec cursus metus facilisis lectus tristique hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras euismod justo quis nibh dictum ultrices. Proin venenatis dolor quis interdum sollicitudin. Pellentesque eget tempus sapien. Suspendisse vitae dui purus. Nam congue malesuada rutrum. Praesent a bibendum tortor. Aliquam at mauris magna. Sed hendrerit auctor lacus, quis venenatis dui. Quisque placerat enim at est pharetra condimentum. Praesent vel mauris mauris. 
            
        </div> <!-- #content -->

        <nav>
            <h4 class="widget-title">navigation</h4>
            navigation will show up here, or another widget
        </nav>

        <aside class="second">
            <h4 class="widget-title">widget sidebar</h4>
            Proin hendrerit, magna pretium rutrum rhoncus, nunc mi lobortis ligula, sit amet aliquam arcu leo at mauris. Integer suscipit, justo ac fermentum rutrum, odio nibh aliquam risus, in aliquam libero nisl eget dui. Suspendisse in ante vel odio sodales scelerisque. Nullam lacinia sapien nec augue mattis, ac molestie diam consequat. Suspendisse vehicula, massa et sollicitudin euismod, lorem mauris convallis odio, sit amet semper eros massa ultrices est. Donec suscipit, turpis non vestibulum ultrices, lectus nulla accumsan dolor, nec molestie erat erat sit amet nisl. Donec suscipit faucibus diam nec cursus. Praesent sollicitudin sollicitudin convallis. Pellentesque gravida facilisis hendrerit. Suspendisse eget odio sed dolor placerat pellentesque. Duis quis sagittis ligula, eu cursus ante. Aenean a ante sit amet sem rhoncus semper vel eleifend ligula. Curabitur fermentum nibh sit amet faucibus commodo. 
        </aside>

    </div>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php get_footer(); ?>
    </footer>