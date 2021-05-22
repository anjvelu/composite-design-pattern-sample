## Composite Design Pattern in PHP 

- Interact with a group of objects, just like a single object.
- Tree structure to represent part-whole hierarchies.

---
                                Menu
                              /      \
                             /        \
                            /          \
                      CellPhone       Laptop
                          / \          / \
                         /   \        /   \
                        /     \     L1     L2
                       /       \
                 SmartPhone   DumpPhone 
                    /   \
                   /     \
                  /       \
                S1         S2


Composite (it can have other objects below it)
- Menu 
- Laptop
- CellPhone
- SmartPhone

Leaf (it has no objects below it)
- S1
- S2
- L1
- L2
- DumpPhone