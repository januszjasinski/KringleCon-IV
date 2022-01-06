import elf, munchkins, levers, lollipops, yeeters, pits
import time
muns = munchkins.get()
lols = lollipops.get()[::-1]
while True:
    time.sleep(0.05)
    for index, mun in enumerate(muns):
        if (abs(elf.position["x"]-mun.position['x'])) >5 and elf.position["y"] == mun.position["y"]:
            elf.moveTo(lols[index].position)
        elif elf.position["y"]==4:
            elf.moveLeft(6)
            elf.moveUp(10)