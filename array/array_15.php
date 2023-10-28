<?php
//15.Create a multidimensional array to store information about movies, including title, director, and  release year for at least two movies. Display the information for one of the movies.

 $movies =array(
    array("Title"=>"satyana prayogo",
        "Director"=>"vijay",
        "Release_Date"=>"2004"),
        array("Title"=>"chal jivi liye",
        "Director"=>"sandip bhatiya",
        "Release_Date"=>"2012")    
 );
 print_r($movies[1]);

?>