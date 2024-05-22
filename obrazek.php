<?php
//pict=ImageCreateTrueColor(x, y);
$im = ImageCreateTrueColor(600, 600);

//ImageColorAllocate (pict, R, G, B);
$czarny = ImageColorAllocate ($im, 0, 0, 0);
$zielony = ImageColorAllocate($im, 141, 242, 102);
$czerwony = ImageColorAllocate($im, 255, 0, 0);
$niebieski = ImageColorAllocate($im, 0, 0, 180);
$bialy = ImageColorAllocate($im, 255, 255, 255);
$tlo = ImageColorAllocate($im, 0, 206, 209);
$srodek=ImageColorAllocate($im, 176, 224, 230);
$pomaranczowy=ImageColorAllocate($im,255, 69, 0);

for($i=0; $i<=600; $i++){
   ImageLine($im,0,$i,600,$i,$tlo);
};
//brzuch
ImageEllipse($im, 300, 450, 200, 200, $bialy);
ImageEllipse($im, 300, 450, 199, 199, $bialy);
ImageEllipse($im, 300, 450, 198, 198, $bialy);
ImageEllipse($im, 300, 450, 197, 197, $bialy);
ImageEllipse($im, 300, 450, 196, 196, $bialy);
ImageEllipse($im, 300, 450, 195, 195, $bialy);
ImageFill($im,300,459,$bialy);


//tłow
ImageEllipse($im, 300, 350, 150, 150, $bialy);
ImageEllipse($im, 300, 350, 149, 149, $bialy);
ImageEllipse($im, 300, 350, 148, 148, $bialy);
ImageEllipse($im, 300, 350, 147, 147, $bialy);
ImageEllipse($im, 300, 350, 146, 146, $bialy);
ImageEllipse($im, 300, 350, 145, 145, $bialy);
ImageFill($im,300,349,$bialy);

//głowa
ImageEllipse($im, 300, 250, 100, 100, $bialy);
ImageEllipse($im, 300, 250, 99, 99, $bialy);
ImageEllipse($im, 300, 250, 98, 98, $bialy);
ImageEllipse($im, 300, 250, 97, 97, $bialy);
ImageEllipse($im, 300, 250, 96, 96, $bialy);
ImageEllipse($im, 300, 250, 95, 95, $bialy);
ImageFill($im,300,250,$bialy);

//kapelusz
ImageLine($im,250,200,350,200,$czarny);
for($i=180; $i<=200; $i++){
    ImageLine($im,250,$i,350,$i,$czarny);
};

ImageLine($im,275,179,325,179,$czarny);
for($i=120; $i<=179; $i++){
    ImageLine($im,275,$i,325,$i,$czarny);
};

//okolewe
ImageLine($im,275,240,275,230,$czarny);
ImageLine($im,285,240,285,230,$czarny);
ImageLine($im,275,240,285,240,$czarny);
ImageLine($im,285,230,275,230,$czarny);
ImageFill($im,280,235,$czarny);

//okoprawe
ImageLine($im,320,240,320,230,$czarny);
ImageLine($im,310,240,310,230,$czarny);
ImageLine($im,320,240,310,240,$czarny);
ImageLine($im,310,230,320,230,$czarny);
ImageFill($im,315,235,$czarny);

//marchewa
ImageLine($im,289,250,289,240,$pomaranczowy);
ImageLine($im,289,240,319,246,$pomaranczowy);
ImageLine($im,289,250,319,246,$pomaranczowy);
ImageFill($im,296,245,$pomaranczowy);

//usmiech
ImageLine($im,295,260,305,260,$czarny);
ImageLine($im,295,270,305,270,$czarny);
ImageLine($im,295,260,295,270,$czarny);
ImageLine($im,305,260,305,270,$czarny);
ImageFill($im,300,265,$czarny);

ImageLine($im,280,260,290,260,$czarny);
ImageLine($im,280,270,290,270,$czarny);
ImageLine($im,290,260,290,270,$czarny);
ImageLine($im,280,260,280,270,$czarny);
ImageFill($im,285,265,$czarny);

ImageLine($im,310,260,320,260,$czarny);
ImageLine($im,310,270,320,270,$czarny);
ImageLine($im,310,270,310,260,$czarny);
ImageLine($im,320,270,320,260,$czarny);
ImageFill($im,315,265,$czarny);

ImageLine($im,325,260,335,260,$czarny);
ImageLine($im,325,250,335,250,$czarny);
ImageLine($im,325,250,325,260,$czarny);
ImageLine($im,335,250,335,260,$czarny);
ImageFill($im,330,255,$czarny);

ImageLine($im,275,260,265,260,$czarny);
ImageLine($im,275,250,265,250,$czarny);
ImageLine($im,275,250,275,260,$czarny);
ImageLine($im,265,250,265,260,$czarny);
ImageFill($im,270,255,$czarny);

//guziki
ImageRectangle($im, 295, 305, 305, 295, $czarny);
ImageRectangle($im, 295, 320, 305, 310, $czarny);
ImageRectangle($im, 295, 335, 305, 325, $czarny);
ImageRectangle($im, 295, 350, 305, 340, $czarny);
ImageRectangle($im, 295, 365, 305, 355, $czarny);
ImageRectangle($im, 295, 380, 305, 370, $czarny);
ImageRectangle($im, 295, 395, 305, 385, $czarny);
ImageRectangle($im, 295, 410, 305, 400, $czarny);











ImageLine($im,275,165,325,165,$bialy);

ImageLine($im,275,175,325,175,$bialy);


ImageString($im, 5, 275, 570, "Balwan", $czarny);

header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>