<?php

session_start();

if(!isset($_SESSION['userapp'])){
    redirect('in/loginapp');   
}