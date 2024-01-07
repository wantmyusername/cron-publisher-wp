if(!empty($_GET['publicar'])){
    if($_GET['publicar'] == '123456'){

        $all_posts = get_posts([
            'fields' => 'ids',
            'post_type' => 'post',
            'post_status' => 'draft',
            'numberposts' => 20
        ]);
   
        if(!empty($all_posts)){
       
            foreach($all_posts as $all_post){
           
                wp_update_post([
                    'ID' => $all_post,
                    'post_status' => 'publish'
                ]);
           
            }
       
        }
   
    }
}
