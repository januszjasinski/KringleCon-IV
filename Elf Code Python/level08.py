import elf, munchkins, levers, lollipops, yeeters, pits
all_lollipops = lollipops.get()
for lollipop in all_lollipops:
    elf.moveTo(lollipop.position)
elf.moveLeft(8)
elf.moveUp(2)
munchkin = munchkins.get(0)
j = munchkin.ask()
inv_map = {j[k] : k for k in j}
munchkin.answer(inv_map["lollipop"])
elf.moveUp(100)