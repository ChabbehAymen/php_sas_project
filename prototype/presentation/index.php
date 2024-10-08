<?php
    require_once dirname(__FILE__)."/../entites/book.php";
    require_once dirname(__FILE__)."/../services/bookService.php";

    



    //  echo "entre LE TITRE : ";
    //  $nom = trim(fgets(STDIN));
    //  echo "entre LA ISBN : ";
    //  $ISBN = trim(fgets(STDIN));
    $books = new BookServices();
    // $book = $books->getBooks();
    // var_dump($book);
     $book = new Book(2, "ayoub", "ASE345EF");
     $books->addBook($book);
    //  $bookService =

    

    require(dirname(__FILE__)."/./bookPresentation.php");

    function askQuestion($question)
    {
      echo $question;
      return trim(fgets(STDIN));
    }
    
    function library_management()
    {
      echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J';
      echo "Welcome to the Books List Manager\n\n";
    
      $exitProgram = false;
      while (!$exitProgram) {
        echo "+------------------------------------+\n";
        echo "|        Books Management            |\n";
        echo "|------------------------------------|\n";
        echo "|    Please choose an action:        |\n";
        echo "|------------------------------------| \n";
        echo "| [v] - View the Books               |\n";
        echo "| [a] - Add a new Book               |\n";
        echo "| [exit] - Exit the program          |\n";
        echo "+------------------------------------+\n\n";
    
        $action = askQuestion("Your choice: ");
        switch (strtolower($action)) {
          case 'v':
            $bookPresentation = new BookPresentation();
            $bookPresentation->viewBooks();
            break;
    
          case 'a':
            $bookPresentation = new BookPresentation();
            $bookPresentation->addBook();
            break;
    
          case 'exit':
            $exitProgram = true;
            break;
    
          default:
            echo "Invalid choice. Please try again.\n";
            break;
        }
      }
      echo "Exiting the program. Goodbye!\n";
    }
    
    library_management();




?>