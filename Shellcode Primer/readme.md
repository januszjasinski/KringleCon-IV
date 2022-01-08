# Shellcode Primer

As mentioned in the report you could just go through to https://tracer.kringlecastle.com/?cheat and cheat but if you're too lazy to do even that then here we are!

## Introduction

> Welcome to Shellcode Primer!
> 
> The goal of Shellcode Primer is to teach you how to write some basic x64 shellcode for reading a file. We'll take you through each piece of what you need, step by step, and show you what's going on.
> 
> First, let's learn the user interface a bit. There's some code below. The left is where you type code, and the right will attempt to syntax-highlight and show build errors.
> 
> For the time being, you don't need to change anything, just have a look at what it's doing - it's more or less the same type of stuff you're going to be learning.
> 
> Go ahead and execute the code (using the bottom below) and play around in the debugger. On the left, you'll see instructions executing in the order that they execute. Click on them to the state when that instruction executes!
> 
> Also, don't forget to click that hint button below! Hints don't cost you anything. :)

```shellcode
; Set up some registers (sorta like variables) with values
; In the debugger, look how these change!
mov rax, 0
mov rbx, 1
mov rcx, 2
mov rdx, 3
mov rsi, 4
mov rdi, 5
mov rbp, 6

; Push and pop - watch how the stack changes!
push 0x12345678
pop rax

push 0x1111
push 0x2222
push 0x3333
pop rax
pop rax
pop rax

; This creates a string and references it in rax - watch the debugger!
call getstring
  db "Hello World!",0
getstring:
pop rax

; Finally, return 0x1337
mov rax, 0x1337
ret
```

## Loops

> Although you won't have to worry about writing a loop for any of these lessons, showing how a loop works is a good demo for the debugger.
> 
> Look at the code below, then execute it (no need to change it). Watch how the same code repeats, over and over, with rax changing in each loop.
> 
> Notice how the code listing below isn't the same as what is executed in the debugger. In the History section of the debugger, the instructions will change to show what is executed to achieve what you describe in the assembly source code.

```
; We want to loop 5 times - you can change this if you want!
mov rax, 5

; Top of the loop
top:
  ; Decrement rax
  dec rax

  ; Jump back to the top until rax is zero
  jnz top

; Cleanly return after the loop
ret
```

## Getting started

> Welcome! Are you ready to learn how to write shellcode? We hope so! First, some tips:
> 
> - Comments are denoted with a semicolon (;)
> - Don't forget to look at the debugger, line by line, if something is wrong
> - Really, don't forget to read the error list! We check each place where you might go wrong in your code
> - Your code for each level is saved in your browser, so you can leave and come back, refresh the page, and hop back to previous levels to borrow code
>
> This level currently fails to build because it has no code. Can you add a ```ret```urn statement at the end? Don't worry about what it's actually returning (yet!)
> 
> Feel free to check previous levels!

```
; This is a comment! We'll use comments to help guide your journey.
; Right now, we just need to RETurn!
;
; Enter a return statement below and hit Execute to see what happens!
ret
```
