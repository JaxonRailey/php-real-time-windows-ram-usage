# Real time Windows RAM usage

For Windows users only!

An unusual and creative use of PHP, outside the box and far from the usual web context.

![PHP Real Time Chat](https://github.com/JaxonRailey/php-real-time-windows-ram-usage/blob/main/screenshot.png?raw=true)

This time, rather than querying the database, I get the **RAM** usage information. I used the **shell_exec** function to run the command as if I were working on the terminal. 

The data is updated frequently through the use of **Server Sent Events** technology, which delegates to the browser the monitoring of a data source and to obtain "push" notifications from the server for each new event. **SSE** communication is always initiated by the client, this step is to open the stream, after which the client will wait for messages from the server until the stream is interrupted.

Enjoy!

:star: **If you liked what I did, if it was useful to you or if it served as a starting point for something more magical let me know with a star** :green_heart:
