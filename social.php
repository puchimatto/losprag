                            
                        <div id = "barrasuperior">
                            <div id="social">
                                <ul>
                                    <li>
                                        <a href="" rel="nofollow">
                                            <img src= "<?php echo get_template_directory_uri(); ?>/library/images/facebook.png">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" rel="nofollow">
                                            <img src= "<?php echo get_template_directory_uri(); ?>/library/images/twitter.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" rel="nofollow">
                                            <img src= "<?php echo get_template_directory_uri(); ?>/library/images/insta.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" rel="nofollow">
                                            <img src= "<?php echo get_template_directory_uri(); ?>/library/images/youtube.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="categorias">
 
                                <?php
                                    /* BUILD THE CATEGORY LIST */
                                    $categories = get_categories(array('type' => 'post','child_of' => 0,'orderby' => 'name','order' => 'ASC','hide_empty' => true, 'exclude' => '1'));
                                    $category_count = 0;  
                                    
                                    foreach($categories as $catty) 
                                    {
                                        $category_count++;
                                        ${'category_list_1'}[] = array('ide'=>$catty->cat_ID,'name'=>$catty->cat_name,'url'=>$catty->category_nicename);
                                    }
                                ?>
                                 
                                    <?php foreach($category_list_1 as $item) { echo '<span class="',$item['url'],'"> </span><a href="?cat=',$item['ide'],'" >',$item['name'],'</a> '; } ?>
                                    <span class="todos"> </span><a href="<?php echo site_url(); ?>">todos</a>
                            </div>
                        </div>