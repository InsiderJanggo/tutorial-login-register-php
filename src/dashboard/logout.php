<?php

session_start();
session_unset("user");
session_destroy();
header("Location: ../");