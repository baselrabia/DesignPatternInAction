![Screenshot from 2021-11-26 14 51 54](https://user-images.githubusercontent.com/27627958/143583960-bc64fee7-4cb7-420c-b43f-228974b7edc4.png)

![Screenshot from 2021-11-26 14 53 48](https://user-images.githubusercontent.com/27627958/143584166-69d3da5e-f7f7-41ad-be39-b04ac6ac810a.png)

## Hello Adapter Pattern 

1. integration 3rd party APIs
2. Dependance inversion
3. User the container to swap implementations


#### Primer

- Two Components with incompatible interfaces
- Converts Messages passed between the components into something each can understand

#### Scenario

- News aggregator
- Want to provide "local news" in the sidebar
- Geolocate based on IP Address


#### Benefits

- Inverts dependency
- Ability to swap out implementations
- Easy to test
