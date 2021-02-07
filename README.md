# MoneyCollection_practical
Moneny Collection Maxmoney function

MoneyMax function has the following parameters:
n: an integer that denotes the number of classmates
k: an integer that denotes Julia's unlucky number




Sample Case 0

Sample Input For Custom Testing
2
2

Sample Output 0

Sample Input For Custom Testing
3
Explanation 0
Julia visits the following sequence of n = 2 classmates:
1. Julia collects 1 dollar from classmate 1 to get sum = 1.
2. Julia collects 2 dollars from classmate 2 to get sum = 1 + 2 = 3; observe that she collected a maximal amount of money and avoided having exactly k = 2 dollars.


====================================================================

Sample Case 1
Sample Input For Custom Testing
2
1

Sample Output 1
Sample Input For Custom Testing
2

Explanation 1
Julia visits the following sequence of n = 2 classmates:
1.  Julia will not collect 1 dollar from classmate 1 because k = 1 and she   refuses to have a sum ≡ k at any time.
2.  Julia moves on and collects 2 dollars from classmate 2 to get sum = 0 + 2 = 2.



==============================================

Sample Case 2
Sample Input For Custom Testing
3
3


Sample Output 2
Sample Input For Custom Testing
5

Explanation 2
Julia must skip some classmate because collecting from all her classmates will result in a sum ≡ k = 3 when she collects from the second classmate. There are two ways for her to visit all n = 3 classmates:
●	 She can collect 1 dollar from classmate 1 to get sum = 1. Next, she can refuse to collect 2 dollars from classmate2 to avoid having a sumequal to k. Next, she can collect3 dollars from classmate 3 to get sum = 1 + 3 = 4.
●	 She can refuse to collect 1 dollar from classmate 1, meaning that sum = 0. Next, she can collect 2 dollars from classmate 2 to get sum = 0 + 2 = 2. Next, she can collect 3 dollars from classmate 3 to get sum = 2 + 3 = 5.
Because we want the maximum amount of money that Julia can collect from her sequentially-numbered classmates without ever having a sum equal to k, we return 5 as our answer.

