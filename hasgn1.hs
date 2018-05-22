
multiples x = [x*1 | x<- [1..x], x `mod` 35 == 0]
doubleAll x = [x * 2| x<- [1..x]]
squaredEvens x = [x*x | x<-[1..x], x `mod` 2 == 0]
