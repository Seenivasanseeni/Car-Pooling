#!/bin/python3

import sys

def count_num(num):
	bit_n=0
	for n in num:
		bit_n=bit_n | 1<<int((n)-1)
	return bit_n
def winningLotteryTicket(tickets):

    
if __name__ == "__main__":
    n = int(input().strip())
    tickets = []
    tickets_i = 0
    for tickets_i in range(n):
       tickets_t = str(input().strip())
       tickets.append(tickets_t)
    result = winningLotteryTicket(tickets)
    print(result)
