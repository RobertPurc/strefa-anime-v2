<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                    Post Id
                                    </th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM posts";

                                $select_posts = mysqli_query($conn, $query);

                                while (
                                  $row = mysqli_fetch_assoc($select_posts)
                                ) {
                                  $post_id = $row['post_id'];
                                  $post_category_id = $row['post_category_id'];
                                  $post_title = $row['post_title'];
                                  $post_author = $row['post_author'];
                                  $post_date = $row['post_date'];
                                  $post_image = $row['post_image'];
                                  $post_content = $row['post_content'];
                                  $post_tags = $row['post_tags'];
                                  $post_comment_count =
                                    $row['post_comment_count'];
                                  $post_status = $row['post_status'];

                                  echo "<tr>";
                                  echo "<td>{$post_id}</td>";
                                  echo "<td>{$post_author}</td>";
                                  echo "<td>{$post_title}</td>";
                                  echo "<td>{$post_category_id}</td>";
                                  echo "<td>{$post_status}</td>";
                                  echo "<td><img class='img-responsive' style='object-fit:cover; width:100px; height:100px; display:block;' src='../images/{$post_image}'/></td>";
                                  echo "<td>{$post_tags}</td>";
                                  echo "<td>{$post_comment_count}</td>";
                                  echo "<td>{$post_date}</td>";

                                  echo "</tr>";
                                }
                                ?>
                                    <td>id</td>
                                    <td>title</td>
                                    <td>Cat1</td>
                                    <td>Status</td>
                                    <td>Image</td>
                                    <td>Tagi</td>
                                    <td>zdj</td>
                                    <td>Commentss</td>
                                    <td>10.10.2020</td>
                                
                            </tbody>
                        </table>
