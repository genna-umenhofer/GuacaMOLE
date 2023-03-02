<?php require '../includes/header.php'; ?>
<!--<h1 class="top-margin bottom-margin center-text">STEM Connect</h1>-->


<div class="top-margin bottom-margin">
  <h2>Internships</h2>
  <div class="even-space">
    <?php 
    $sql = "SELECT * FROM internships";
    $result = mysqli_query($conn, $sql);
    $numResult = mysqli_num_rows($result);
    
    if ($numResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <div class='gray-box1'>
          <div class='highlights'>
            <h3>{$row['title']}</h3>
            <p>{$row['info']}</p>
          </div>
          <a href='{$row['url']}' class='button' target='_blank'>Visit Site</a>
        </div>";
      }
    }
    ?>
  </div>
</div>

<div class="top-margin bottom-margin">
  <h2>Related Media</h2>
  <div class="even-space">
    <?php 
    $sql = "SELECT * FROM media";
    $result = mysqli_query($conn, $sql);
    $numResult = mysqli_num_rows($result);
    
    if ($numResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <div class='gray-box1'>
          <div class='highlights'>
            <h3>{$row['title']}</h3>
            <p>{$row['info']}</p>
          </div>
          <a href='{$row['url']}' class='button' target='_blank'>Read More</a>
        </div>";
      }
    }
    
    mysqli_close($conn);
    ?>
  </div>
</div>

<?php require '../includes/footer.php'; ?>