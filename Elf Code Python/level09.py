from functools import reduce
import elf, munchkins, levers, lollipops, yeeters, pits, operator
def YourFunctionNameHere(one_argument):
    flat = reduce(operator.concat, one_argument)
    return sum([i for i in flat if isinstance(i, int) or isinstance(i, float)])

ints = [0,4]

for key in ints:
    elf.moveDown(key+1)
    levers.get(key).pull(key)
    elf.moveLeft(key+2)
    levers.get(key+1).pull(key+1)
    elf.moveUp(key+3)
    levers.get(key+2).pull(key+2)
    elf.moveRight(key+4)
    if key==0:
        levers.get(key+3).pull(key+3)

elf.moveUp(2)
elf.moveLeft(4)
munchkins.get(0).answer(YourFunctionNameHere)
elf.moveUp(2)