<nav>
                	<div id="menu" class="collapse navbar-collapse">
                        <?php 
                         $sqlCategories = "SELECT * FROM categories ORDER BY cat_id ASC";
                         $queryCategories = mysqli_query($conn, $sqlCategories);
                        ?>
                        <ul class="nav justify-content-center">

                         <?php 
                          if(mysqli_num_rows($queryCategories)){
                            while($cate = mysqli_fetch_assoc($queryCategories)){

                         ?>
                            <li class="menu-item">
                              <a class="nav-link active; text-dark;" aria-current="page" href="category-product.php?cat_id=<?php echo $cate['cat_id'];?>">
                              <b> <?php echo $cate['cat_name']; ?> </b>
                            </a>
                            </li>
                        <?php  }
                          } ?>
                          </ul>
                    </div>
                </nav>

 