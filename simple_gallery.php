<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Gallery (No Functions Used)</title>
    <style>
        body { font-family: Arial; }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 4px;

            /* smooth zoom animation */
            transition: transform 0.4s cubic-bezier(.25,.8,.25,1),
                        box-shadow 0.4s ease;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.1);
            z-index: 20;
            box-shadow: 0 10px 25px rgba(0,0,0,0.35);
        }
    </style>
</head>
<body>

<h2>PHP Image Gallery (Smooth Zoom, No Directory Functions)</h2>

<div class="gallery">
    <?php 
	// Manually list your images here
	$images = array(
    "https://i.pinimg.com/736x/7d/54/99/7d5499f650b4149bd781a79108c04768.jpg",
    "https://i.pinimg.com/736x/86/3e/82/863e82b45d2a151c053d61ab8fb4afbe.jpg",
    "https://i.pinimg.com/736x/29/9a/4b/299a4bddac179cce5e742f99862a6331.jpg",
    // add more manually...
);
	
	
	foreach ($images as $img): ?>
        <img src="<?php echo $img; ?>" alt="">
    <?php endforeach; ?>
</div>

</body>
</html>

Program 2 With glob function 

<?php
$dir = "images"; // folder containing images
$images = glob($dir . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Image Gallery</title>
    <style>
        body { font-family: Arial; }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 4px;
			
        }
		     .gallery img:hover {
            transform: scale(1.8);
            z-index: 10;
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>

<h2>Simple PHP Image Gallery</h2>

<div class="gallery">
    <?php foreach ($images as $image): ?>
        <img src="<?php echo $image; ?>" alt="">
    <?php endforeach; ?>
</div>

</body>
</html>
