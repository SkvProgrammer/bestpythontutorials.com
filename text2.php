<p style="text-align:justify;" class="mt-4">Before we can start learning about closures we first need to understand what is a nested function.We have already discussed it but we are again going to cover Nested Functions in this Chapter.</p>
<h3 class="text-left mt-4">Nested Functions</h3>
<p style="text-align:justify">When a Function is declared inside another function then we call it a Nested Function.Variables of Nested Function are accessed via Enclosing Scope.</p>
<p style="text-align:justify;">In Python, these non-local variables are read only by default and we must declare them explicitly as non-local (using nonlocal keyword) in order to modify them.</p>
<div class="text-left mt-5">
<h3 style="text-align:left;">EXAMPLE</h3>
  <div data-datacamp-exercise data-no-lazy-loading data-lang="python">
<!--  <code data-type="pre-exercise-code">
    # This will get executed each time the exercise gets initialized
    b = 6
  </code>-->
  <code data-type="sample-code">
  def print_square(n):
# This is the outer enclosing function

    def printing_square():
# This is the nested function
        print(n**2)

    printing_square()

# We execute the function
# Output: 4
print_square(2)
  </code>
  </div>

  <p style="text-align:justify;" class="mt-4">The print_square() function was called with the value n = 2 and the returned function was bound to the name another. On calling it, the message was still remembered although we had already finished executing the print_square() function.</p>
<p style="text-align:justify;" class="mt-4">
This technique by which some data (2) gets attached to the code is called closure in Python.</p>

<h3 style="text-align:left;" class="mt-4">Why We should use Closures?</h3>
<p style="text-align:justify;">Now we have to discuss a question that why we should use closures or you can say when we should use closures.</p>

<p style="text-align:justify;">Closures can avoid the use of global variables and helps in data hiding.It also helps to provide a pure object oriented solution to a problem.
</p>
<p style="text-align:justify;">
When there are few methods (one method in most cases) to be implemented in a class, closures can provide an alternate and more elegant solutions. But when the number of attributes and methods get larger,it's better to implement a class.
</p>
<p style="text-align:justify;">
Below I will provide you a simple example to grab the knowledge of Closures.</p>