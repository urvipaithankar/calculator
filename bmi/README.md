# BMI Calculator

#### **[Check out creator's details](https://urvipaithankar.github.io)**

---

# BMI Calculator API

---

## Calculate Body Mass Index (BMI) easily with this API. Read this documentation for detailed information.

---

### API usage : 
#### GET
```

https://urvipaithankar.herokuapp.com/bmi/index.php/height/weight/

```
###### example

```

https://urvipaithankar.herokuapp.com/bmi/index.php/159/56/

```

---

### Parameters:

```

height - should be specified in Centimeters (cms)
weight - should be specified in Kilograms (Kgs)

```

-----

### Output format:

#### The output response will be in JSON format. Kindly check the structure below.


##### JSON format

```json	

"data":{
	"height" : height,
	"weight" : weight,
	"bmi" : bmi             
}

```

### NOTE

The unit of BMI is *kg/m<sup>2</sup>*


---

## Error Codes

**_ERROR NO._** | **_ERROR_** | **_DESCRIPTION_**

-------------- | -------------- | ----------------
	
**001** | *ERROR001* | This error occues if there is a problem with the input data and/or parameters specified.

-----

[Visit the creator's site...](https://urvipaithankar.github.io)