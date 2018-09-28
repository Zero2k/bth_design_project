---
author: devcorp
published: "2018-09-20"
category:
    - graphql, node.js
...
Node.js Tutorial - Introduction
==================================

<figure class="figure right">
<a href="image/dbwebbisar.jpg"><img src="image/dbwebbisar.jpg?w=200&h=150&a=0,20,20,50&cf" alt=""/></a>

</figure>

GraphQL is the rising star of backend technologies. It replaces REST as an API design paradigm and is becoming the new standard for exposing the data and functionality of a server.

<!--more-->

### Overview {#overview}

In this tutorial, you’ll learn how to build an idiomatic GraphQL server entirely from scratch. You are going to use the following technologies:

* graphql-yoga: Fully-featured GraphQL server with focus on easy setup, performance & great developer experience. It is built on top of Express, 
* apollo-server, graphql-js and more.
* Prisma: GraphQL database proxy that turns your database into a GraphQL API. This API provides powerful, realtime CRUD operations for your data model.
* graphql-config & GraphQL CLI: Tooling to improve various GraphQL-related worfklows.
* GraphQL bindings: A convenient way of working with a GraphQL API. The binding generates dedicated JavaScript functions for each API operation.

* GraphQL Playground: “GraphQL IDE” that allows to interactively explore the functionality of a GraphQL API by sending queries and mutations to it. It’s somewhat similar to Postman which offers comparable functionality for REST APIs. Among other things, a GraphQL Playground…

    * auto-generates a comprehensive documentation for all available API operations.
    * provides an editor where you can write queries, mutations & subscriptions, with auto-completion(!) and syntax highlighting.
    * lets you easily share your API operations.

### What to expect {#expect}

The goal of this tutorial is to build an API for a Hacker News clone. Here is a quick rundown of what to expect in this tutorial.

You’ll start by learning the basics of how a GraphQL server works, simply by defining a GraphQL schema for the server and writing corresponding resolver functions. In the beginning, these resolvers will only work with data that’s stored in-memory - so nothing will be persisted beyond the runtime of the server.

Because nobody wants a server that’s not able to store and persist data, you’re going to add a database layer to it. The database layer is powered by Prisma and will be connected to your GraphQL server via Prisma bindings. You can think of these bindings as a “GraphQL ORM” that helps you properly resolve incoming queries.

Once you have the database connected, you are going to add more advanced features to the API.

You’ll start by implementing signup/login functionality that enables users to authenticate against the API. This will also allow you to check the permissions of your users for certain API operations.

The next part of the tutorial is about adding realtime functionality to your API using GraphQL subscriptions.

Lastly, you’ll allow the consumers of the API to constrain the list of items they retrieve from the API by adding filtering and pagination capabalities to it.

Let’s get started 

Read the complete article at: https://www.howtographql.com/graphql-js/0-introduction/
