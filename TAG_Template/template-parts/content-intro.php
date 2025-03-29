<div class="main-background-holder">
    <img class="main-background-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/main-background.jpg"/>
    
    <div class="main-intro-content container-lg">
        <div class="row">
            <div class="col">
                <h1 class="intro-header display-2">Welcome to TAG</h1> 
            </div>
        </div>
        
        <div class="row gx-2">
            <?php
                $category1 = "Member Contributions";
                $category2 = "Chair's Blog";
                $category3 = "TAG Talks";
                $category4 = "V-Conference";
                $category_id1 = get_cat_ID($category1);
                $category_id2 = get_cat_ID($category2);
                $category_id3 = get_cat_ID($category3);
                $category_id4 = get_cat_ID($category4);
                $category_link1 = get_category_link( $category_id1 );
                $category_link2 = get_category_link( $category_id2 );
                $category_link3 = get_category_link( $category_id3 );
                $category_link4 = get_category_link( $category_id4 );
            ?>
            <div class="intro-category col-sm-auto">
                <a href="<?php echo esc_url( $category_link1 ); ?>" alt="View all posts in '<?php echo $category1; ?>'" title="<?php echo $category1; ?>"> <div class="metadata intro-post-category"> <i class="far fa-folder"></i> <?php echo $category1; ?> </div> </a>
            </div>
            <div class="intro-category col-sm-auto">
                <a href="<?php echo esc_url( $category_link2 ); ?>" alt="View all posts in '<?php echo $category2; ?>'" title="<?php echo $category2; ?>"> <div class="metadata intro-post-category"> <i class="far fa-folder"></i> <?php echo $category2; ?> </div> </a>
            </div>
            <div class="intro-category col-sm-auto">
                <a href="<?php echo esc_url( $category_link3 ); ?>" alt="View all posts in '<?php echo $category3; ?>'" title="<?php echo $category3; ?>"> <div class="metadata intro-post-category"> <i class="far fa-folder"></i> <?php echo $category3; ?> </div> </a>
            </div>
            <div class="intro-category col-sm-auto">
                <a href="<?php echo esc_url( $category_link4 ); ?>" alt="View all posts in '<?php echo $category4; ?>'" title="<?php echo $category4; ?>"> <div class="metadata intro-post-category"> <i class="far fa-folder"></i> <?php echo $category4; ?> </div> </a>
            </div>
        </div>
    </div>
</div>