fib n = go n 1 2
  where 
  go n f s
    |(f+s) > n = []
    | otherwise = (f+s) : go n s (f+s)
   