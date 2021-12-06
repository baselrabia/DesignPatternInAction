# Design Pattern In Action



### Are you stuck with design pattern 

design pattern book of the gang four written in 2008 where the web Development wasn't much been in the industray ,
so the examples that's given in the book don't really relate to us in everyday work, even their ideas are good, they are just not acceptable to web development

### So how i will became a good developer 
we can see some of the design pattern that we use day to day to help make our code 
1. cleaner
2. maintainable 
3. reusable 

<hr>

## Patterns In Action

### 1- Adapter Pattern 

1. integration 3rd party APIs
2. Dependance inversion
3. User the container to swap implementations


#### Primer

- Two Components with incompatible interfaces
- Converts Messages passed between the components into something each can understand


#### Benefits

- Inverts dependency
- Ability to swap out implementations
- Easy to test


### 2- Strategy Pattern 

1. Clean up branching logic in large classes
2. In-depth refactoring 

#### Benefits

- Simplifies containing classes by removing conditional logic
- Allows to defer decisions until runtime
- Makes the clauses using the strategies "pluggable"



### 3- Factory Pattern 

1. identify Factories hiding in code 
2. Extract Class refactor 
3. Take advantage of Auto-wiring Service Container

#### Primer

- Only responsible for creating objects of a specific type
- Encapsulate decision process for choosing the appropriate concretion

#### Benefits

- Moves creation logic out of dependant classes
- Simple and composable
- Lean on the Service Container to construct and inject







<hr>

## References
1. [Video : Colin Decarlo - Design Patterns with Laravel ](https://www.youtube.com/watch?v=e4ugSgGaCQ0)
2. [Book : Laravel Design Patterns and Best Practices PDF ](https://github.com/muthukumarse/books-1/blob/master/Laravel%20Design%20Patterns%20and%20Best%20Practices.pdf)
3. [PHP The Right Way](https://phptherightway.com/pages/Design-Patterns.html)
4. [DesignPatternsPHP DOC](https://designpatternsphp.readthedocs.io/en/latest/README.html)
5. [DesignPatternsPHP Repo](https://github.com/DesignPatternsPHP/DesignPatternsPHP)
6. [mastering-php-design-patterns PDF](https://github.com/muthukumarse/books-1/blob/master/mastering-php-design-patterns/mastering-php-design-patterns.pdf)
7. [laravel-best-practices](https://github.com/alexeymezenin/laravel-best-practices)
8. [ADR Pattern]( http://pmjones.io/adr/)
9. [Hexagonal Architecture](https://blog.8thlight.com/uncle-bob/2012/08/13/the-clean-architecture.html )
10. [Object Calisthenics]( http://williamdurand.fr/2013/06/03/object-calisthenics/)
