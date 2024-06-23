# Simple PHP Facade Pattern Implementation

### This repository is a simple version of the Facade design pattern in PHP, inspired by how Laravel does it

## Structure

The project consists of the following main components:

- Internal System
  - Facade: An abstract class that defines a static method to handle calls to the underlying subsystem.
  - Application: A class that registers and initializes facades.
  - HelloFacade: A simple class that contains the functionality to be exposed through the Facade.
- Client Code
  - <i>Hello (Concrete)</i>: A concrete implementation of the Facade class that provides how to access to the HelloFacade.
