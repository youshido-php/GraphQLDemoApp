GraphQL Demo App
============


This project was created to show how we use [GraphQLBundle](https://github.com/Youshido/GraphQLBundle) in our projects.

To ilustrate this we created simple backend application witch provide API endpoint for  [React Example TODO app](http://todomvc.com/examples/react) (source code and how to run it you can see [here](https://github.com/tastejs/todomvc/tree/master/examples/react)).


## How to run
To run backend you need clone this repo and:

* If you have docker installed, just type this in project root:

  > docker-compose up -d

  This command will run containers and exposed port will be `8500`.

  API endpoint: `http://localhost:8500/graphql`


* If you have web stack installed, run:

  > php bin/console server:start

  API endpoint: `http://localhost:8000/graphql`

## Sending requests
Now you can easily send request to endpoint, for example:
>$ curl -XPOST 'http://127.0.0.1:8000/graphql'

Response:
```graphql
{
    "errors": [
        {
            "message": "Must provide an operation."
        }
    ]
}

```

Now let's specify query in request content:
> $ curl -XPOST 'http://127.0.0.1:8000/graphql' -F 'query={ todos { id } }'

Response:
``` graphql
{
    "data": {
        "todos": [
          {
            "id": 129
          }
        ]
    }
}
```

## GraphiQL extension
To run GraphiQL extension, just open `endpoint + /explorer` in your browser, for example `http://localhost:8000/graphql/explorer`.

## Configuration for React example Todo app
If you have installed [React Example TODO](http://todomvc.com/examples/react) application and want to use our endpoint, you need to change endpoint in `server.js` on line 10:

![Example](https://s13.postimg.org/t98deyd87/server_js_todomvc_projects_test_react_tod.png)
