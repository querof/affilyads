# Affilyadds

In this repository you can find the results of the code challenge. 

## Project Structure
The results are contained in sub-folders of the 'src' folder;  one for every exercises, every class/interface was created in different files, in order to have proper namespaces and improve the readability of the code.

.                  
├── README.md                  
├── Tests                  
│   ├── Login                  
│   │   ├── AuthenticationService                  
│   │   │   ├── GoogleAuthServiceTest.php                  
│   │   │   └── SimpleAuthenticationServiceTest.php                  
│   │   └── LoginModuleTest.php                  
│   └── QA                  
│       └── QuestionTest.php                  
├── composer.json                  
└── src                  
    ├── Flights                  
    │   ├── FlightBookingSystemInterface.php                  
    │   ├── FlightPricingServiceInterface.php                  
    │   └── Repositories                  
    │       ├── AirportInterface.php                  
    │       ├── AirportRepositoryInterface.php                  
    │       ├── Flight.php                  
    │       ├── FlightRepositoryInterface.php                  
    │       ├── FlightTicket.php                  
    │       ├── FlightTicketsRepositoryInterface.php                  
    │       ├── UserInterface.php                  
    │       └── UserRepositoryInterface.php                  
    ├── Login                  
    │   ├── AuthenticationService                  
    │   │   ├── AuthenticationServiceInterface.php                  
    │   │   ├── GoogleAuthService.php                  
    │   │   └── SimpleAuthenticationService.php                  
    │   ├── LoginModule.php                  
    │   ├── NormalUser.php                  
    │   ├── ThirdPartyUser.php                  
    │   ├── UnableToAuthenticateUserException.php                  
    │   └── User.php                  
    └── QA                  
        ├── Answer.php                  
        ├── AnswerInterface.php                  
        └── Question.php                  
        
#### Login module refactor: 

Is contained in Login folder(src\Login); also you can find some unit test in the 'Test\Login' folder.


#### AnswerInterface implementation: 

Is contained in QA folder(src\QA); also you can find some unit test in the 'Test\QA' folder.


#### Refactor FlightBookingSystemInterface: 

Is contained in Flights folder(src\Flights). 

## Disclaimer:

- The projects contain big commits in a single branch; in the "real world" it must be delivered in an incremental way.
- Some implementations are not "complete", since most of the exercises are more focus in architecture; for instance in the Login module refactor exercise; the implementation of the different Authentication services have only an illustrative intention.   
