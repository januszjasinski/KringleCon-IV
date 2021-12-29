import elf, munchkins, levers, lollipops, yeeters, pits
data = levers.get()[0].data()
if type(data) == bool:
    data = not data
elif type(data) == int:
    data = data * 2 
elif isinstance(data, list):
    data = [x+1 for x in list]
elif isinstance(data, str):
    data = data + data
else:
    data["a"] += 1
elf.moveUp(2)
levers.get()[0].pull(data)
elf.moveUp(10)
