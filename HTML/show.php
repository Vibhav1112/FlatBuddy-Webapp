<?php

$sql="select * from login";
$res=mysqli_query($conn,$sql);
$sql1="select * from flatdata";
$res1=mysqli_query($conn,$sql);
$i=0;
$out="<div class='cardsection'>";
while($i<mysqli_num_rows($res)){
    $r=mysqli_fetch_assoc($res);
    $out=" <div class='card'>
            <div class='imgBx'>
                <img src='../Media/Girl 1.jpg' alt='Person-1'>
            </div>
            <div class='content'>
                <div class='details'>
                    <h2>Florence Pugh <br><span><i class='fa fa-map-marker'></i> New York, USA</span></h2>
                    <div class='data'>
                        <h3><span>Rent</span><br>&#x20B9 10000 </h3>
                        <h3><span>Looking for</span><br>Female </h3>
                    </div>
                    <div class='actionBtn'>
                        <a href='../HTML/Profile (1).php'><button>Check Now</button></a>
                    </div>
                </div>
            </div>
        </div>"
}

$out="</div>";


?>