import elf, munchkins, levers, lollipops, yeeters, pits
lever0 = levers.get(0)
sum = lever0.data() + 2
elf.moveTo(lever0.position)
lever0.pull(sum)
elf.moveTo({"x":2, "y":2})