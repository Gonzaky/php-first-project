<?php
// IMPORTANT: COOKIES ARE USED FOR PERSONALIZATION , SESSION MANAGEMENT AND TRACKING

// How to set cookies

setcookie('name', 'value' , time()+ 60); // expires from now + 60 seconds

// How to update cookie
setcookie('name' , 'value [updated]' , time()+ 3600 );

// How to delete cookie
setcookie('name' , '' , time() -1 );