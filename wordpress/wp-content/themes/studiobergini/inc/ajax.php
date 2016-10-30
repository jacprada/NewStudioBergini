<?

// add_action('wp_ajax_wat_ajax_load_more', 'wat_ajax_load_more');
// add_action('wp_ajax_nopriv_wat_ajax_load_more', 'wat_ajax_load_more');
// function wat_ajax_load_more(){
// 	//simple Security check
//     check_ajax_referer( 'wat-yay', 'nonce' );

//     $query_vars['paged'] = $_REQUEST['page'];
//     $posts = new WP_Query( $query_vars ); 
//     $query_vars['orderby'] = 'date';
//     $query_vars['order'] = 'DESC';
//     $posts = new WP_Query( $query_vars ); 
   
   
//     if ( $query_vars['paged'] == $posts->max_num_pages )
//     {
//         $return['last'] = true;
//     }

//     $articles = array();

//     //get twitter
//     $arr_tweets = latest_tweets_render('watproperty', 5, true, false, $pop = 0 , $_REQUEST['twitter']);
//     foreach ($arr_tweets as $time => $tweet) {

//         $articles[$time] = '<article class="blog-item tweet">'.$tweet.'</article>';
//     }
//     $return['twitter'] = $_REQUEST['twitter'] + 1;
//     //get instagram images
//     $url = $_REQUEST['instagram'];
//     $feed = json_decode(curl_get_contents($url));
//     $return['instagram'] = $feed->pagination->next_url;

   
//     foreach($feed->data as $item) {
//         $time = $item->created_time;
//         while(isset($articles[$time]))
//         {
//             $time = $item->created_time + 1;
//         }
//         $articles[ $time] = '<article class="blog-item instagram">
//         <img src="'.$item->images->standard_resolution->url.'" alt="">
        
//         <a ng-class="{hover: instagram['.$time.']}" ng-mouseenter="instagram['.$time.'] = true" ng-mouseleave="instagram['.$time.'] = false"  href="'.$item->link.'" target="_blank" class="instagram-overlay overlay">
//             <div class="overlay-content">
//                 <p>@wat</p>
//                 <p class="time">'.human_time_diff( $item->created_time ).' ago</p>
//             </div>
//         </a>
//         <img src="'.get_bloginfo('template_directory').'/img/instagram.svg" class="instagram-post-logo">
//         </article>';
//     }
    
    
//      // get posts
//     if( $posts->have_posts() ) {
//         while ( $posts->have_posts() ) 
//         {
//             $posts->the_post(); 
//             $time = get_the_time('U');
//             while(isset($articles[$time]))
//             {
//                 $time = get_the_time('U') + 1;
//             }
            
//             $articles[$time] = '<article class="blog-item post">
//                 '.ric_get_image(get_post_thumbnail_id(), 'original', '25v').'
//                 <h1>'.get_the_title().'</h1>
//                 <div class="blog-text">'.apply_filters('the_content', get_the_content()).'</div>
//             </article>';
//         }

        
//     }


//     krsort($articles);
    
//     $return['html'] = implode('',$articles);

//     echo json_encode($return);
   

//     die();
// }