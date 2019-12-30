<!-- News Box Start -->
<div class="col-xs-6 col-lg-4 news-box">
              <div class="news">
                <h4 class="text-center">Latest News</h4>
                <div class="news-list">
                <?php
                            $sql = "SELECT * FROM news;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0) {
                            
                              // echo '<ul>';
                            
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo '<p><strong>&nbsp;'.$row['date_of_creation'].'</strong><br>>>&nbsp;<a style="color:black"; href="'.$row['path'].'">'.$row['name'].'</a></p>';      
                                }
                            // echo '</ul>';
                            } 
                            else {
                                echo 'SQL ERROR';
                            }
                            ?>
                  
                </div>
              </div>
          </div>
          <!-- News Box End -->