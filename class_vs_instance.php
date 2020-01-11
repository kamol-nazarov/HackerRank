
<?php





  class Person {

    public $age;

    public function __construct($initialAge) {

      if ( $initialAge < 0 ) {
        
        print_r( "Age is not valid, setting age to 0.\n" );
        $this->age = 0;

      } else $this->age = $initialAge;

      return;

    }

    public  function amIOld(){
      
      if ( $this->age >= 13 ) {

        if ( $this->age < 18 ) print_r( "You are a teenager.\n" );
        else print_r( "You are old.\n" );

      } else print_r( "You are young.\n" );

    }

    public  function yearPasses(){
      
      $this->age += 1;
      return;

    }

  }

?>