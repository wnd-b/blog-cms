<?php 
include "header.php";
?>
<nav>
<a href="/html/">HTML</a> |
        <a href="/css/">CSS</a> |
        <a href="/blog-cms/post.php">POST</a> |
        <a href="/blog-cms/post-submission.php">POST-Submission</a> |
        
      </nav>

      <main>
            <form action="/action_page.php" method="get">
                First name: <input type="text" name="fname"><br>
                Last name: <input type="text" name="lname"><br>
                <input type="submit" value="Submit">
              </form>

              <textarea rows="4" cols="50">
                    Text area
                    </textarea>


          </main>

             <?php 
include "footer.php";
?>