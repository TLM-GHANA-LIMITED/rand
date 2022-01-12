<!DOCTYPE html>
<html  lang="en">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title> Random GraidUp Images  </title>

<style>
html,

body {
  background-color: black; 
}

.graidup_img {
  position: fixed; 
  top: 0; 
  left: 0; 
  min-width: 100%;
  min-height: 100%;
}

</style>

</head>

<body >

  <div id="graidup_imgs"> </div>

<script>

  function graidupRandomImages() {

    // Random Image Array
    const ranImg = new Array();

    //URL for random Images
    ranImg[0] = "https://firebasestorage.googleapis.com/v0/b/graidup.appspot.com/o/welcome%202.jpg?alt=media&token=aa249f95-99e0-457d-8473-5700fec31ce9";
    ranImg[1] = "https://firebasestorage.googleapis.com/v0/b/graidup.appspot.com/o/welcome.jpg?alt=media&token=400cd699-7ca7-47b0-a487-eacf7d440680";
    ranImg[2] = "https://firebasestorage.googleapis.com/v0/b/graidup.appspot.com/o/FIAMImages%2FIn%20app%20massage%2022.jpg?alt=media&token=72065503-7519-4c03-b244-cb477d0fa7d7";
    ranImg[3] = "https://firebasestorage.googleapis.com/v0/b/graidup.appspot.com/o/FIAMImages%2FFirebase%20post.jpg?alt=media&token=be8ba2fd-7524-483c-b5db-e9d5c9ca7fdc";
    ranImg[4] = "https://firebasestorage.googleapis.com/v0/b/graidup.appspot.com/o/FIAMImages%2FIn%20app%20massage%205bb.jpg?alt=media&token=6780ffce-eff4-4716-85be-6a6d071013d1";
    ranImg[5] = "https://firebasestorage.googleapis.com/v0/b/graidup.appspot.com/o/FIAMImages%2FIn%20app%20massage%20006.jpg?alt=media&token=ecb71b8a-1549-4970-8121-da7087dbb66d";

    //generate a number and provide to the image to generate randomly
    let num = Math.floor(Math.random() * ranImg.length);

    document.getElementById("graidup_imgs").innerHTML = '<img class="img-fluid graidup_img" src="' + ranImg[num] + '" />';

  }


  graidupRandomImages()

</script>

</body>  
</html>
