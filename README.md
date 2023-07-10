# PHPStan demo

Add quick introduction about static analysis, the AST, lexing/parsing, PHP-parser project, etc..

See https://phpstan.org/user-guide/getting-started

Mention https://github.com/phpstan/phpstan-strict-rules

## Levels

0. basic checks, unknown classes, unknown functions, unknown methods called on $this, wrong number of arguments passed to those methods and functions, always undefined variables
1. possibly undefined variables, unknown magic methods and properties on classes with __call and __get
2. unknown methods checked on all expressions (not just $this), validating PHPDocs
3. return types, types assigned to properties
4. basic dead code checking - always false instanceof and other type checks, dead else branches, unreachable code after return; etc.
5. checking types of arguments passed to methods and functions
6. report missing typehints
7. report partially wrong union types - if you call a method that only exists on some types in a union type, level 7 starts to report that; other possibly incorrect situations
8. report calling methods and accessing properties on nullable types
9. be strict about the mixed type - the only allowed operation you can do with it is to pass it to another mixed