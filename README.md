For GPT test go to /chatgpt

This site is to test AI and then will continued to become the complete version of jackdavidmaher.co.uk

Clone repo and copy .env.example to .env and add a chatgpt API key. cd to jackdavidmaher.co.uk and run php artisan seve

Comments for clockwork:

Through testing processing speeds, without streaming enabled, I found that the fastest model (as of 31/12/2025) is gpt-5.1 which currently takes around 10-15 seconds to complete a request.
I think that the current best way to implement a page content improver is to do it in the structure in this repo (chatgpt.blade.php and ChatController.php)

This is where I have a System prompt that outlines how the model should behave. 
THIS IS INCREDIBLY IMPORTANT!

This was where I started to find great sucess with the responses. 
Even if you add nothing of the context of what's on the site already and just say improve this text, you can see decent results.
An example of what this looks like is in ChatController.php
The extra info seen in the variations of the user prompts where it grabs the text currently served to the other pages really makes it a powerful tool that can fill in the lack of information by the user.

The context windows of modern LLM's is around half a million and only seems to be increasing.
This far exceeds any site we could have if we uploaded all text on it to be processed.

However, to optimise the requests, When forming prompt templates, it is important to maintain locality of context. 
This is more important than using clear language. (although you should do this as well)
This is because the transformer phases in the LLM weight the tokens adjacent to the one being altered with greater importance.
They also look for the tokens near the begining and end of the prompt for context so take advantage of that.

The general flow of a prompt should be as follows:
[what you are trying to do] -> [content it you want it to edit/question you have for it] -> [context it can use to help form a response] -> [Final guidelines you need it to follow (put this is system prompt as well but maybe in differnt words if its clearer)]

When adding context keep locality of context.
This is why I suggest listing pages as not only is it much easier to implement techincally, it provides better context for the LLM as it can then tell "okay the home page feels like this and the Blogs feel slightly different and are like this"

To make this work better use the key words in your prompt. 
State the page you are adding to exactly as it is worded in the prompt (probably use variable names to make it easier)
Break up page sections in prompt as position of tokens matter heavily in modern LLMs.

Again use ChatController.php for inspiration, but it certainly should not be taken as a perfect example.

Further details can be found in reports written over winter