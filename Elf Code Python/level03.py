import elf, munchkins, levers, lollipops, yeeters, pits
lever0 = levers.get(0)
sum = lever0.data() + 2
lollipop0 = lollipops.get(0)
elf.moveTo(lever0.position)
lever0.pull(sum)
elf.moveLeft(4)
elf.moveUp(100)
