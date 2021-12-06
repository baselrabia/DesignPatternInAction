## Hello Strategy Pattern 

1. Clean up branching logic in large classes
2. In-depth refactoring 

#### Primer

- Goal to accomplish a single task
- Multiple ways to accomplish the task dependant on certain criteria
- Strategies classes adhere to an agreed interface and wrap the algorithm which complete the task


#### Scenario

- personal finance app
- import transactions from a bank 
- support multiple import formats


#### Benefits

- Simplifies containing classes by removing conditional logic
- Allows to defer decisions until runtime
- Makes the clauses using the strategies "pluggable"


## Steps
1. we created a command to read taxes from our banks 
```bash 
php artisan taxatron:load /path/to/some/ledger.txt
```
2.after adding the solution to pass format to the constructor of the ledgerReader
```bash 
php artisan taxatron:load /path/to/some/ledger.txt --format=csv
```

## BEST Quote Ever 
~~~ 
Make The Change Easy, Then Make The Easy Change
~~~

### -  make the change easy 
1. Stop Assuming The REcord's Delimiter
2. Execute The Algorithm To a Strategy
3. Use Different Strategies Based on File Format
4. Fail If An Unsupported Format Is Encountered

### -  Make the easy change
1. Create a Strategy for CSV records
2. Support CSV format