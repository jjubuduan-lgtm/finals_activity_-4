<?php
echo "Menu:\n1 = Add\n2 = Edit\n3 = Delete\n";
$choice = readline("Enter your choice: ");

switch ($choice) {
    case 1: echo "Add selected"; break;
    case 2: echo "Edit selected"; break;
    case 3: echo "Delete selected"; break;
    default: echo "Invalid choice";
}
?>