import pandas as pd
dataset = pd.read_csv('D:/django/Optum-Stratethon/optum/users/BMI2.csv')


dataset.head(10)
import seaborn as sns
import joblib

sns.countplot(x='Gender',data = dataset)
dataset.groupby('Gender').size()
dataset[dataset['Gender'] == 'Male']['Height'].mean()
dataset[dataset['Gender'] == 'Male']['Weight'].mean()
dataset[dataset['Gender'] == 'Female']['Height'].mean()
dataset[dataset['Gender'] == 'Female']['Weight'].mean()
avg_data = dataset.groupby('Gender',as_index=False).mean()
print(avg_data)
sns.countplot(x='Gender',hue='Height',data=avg_data)
sns.countplot(x='Gender',hue='Weight',data=avg_data)
sns.countplot(x='Gender',hue='Index',data=avg_data)
dataset.describe()
dataset.shape
sex=pd.get_dummies(dataset['Gender'],drop_first=True)
sex.head(4)
dataset = pd.concat([dataset,sex],axis=1)
dataset.head(5)
dataset.drop('Gender',axis=1,inplace=True)
dataset.head(5)
X = dataset.drop('Index',axis=1)
y = dataset['Index']
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=1)
# K Nearest Neighbor
from sklearn.metrics import accuracy_score
from sklearn import preprocessing,neighbors
clsf = neighbors.KNeighborsClassifier()
clsf.fit(X_train,y_train)
pred_y = clsf.predict(X_test)
accuracy_score(y_test,pred_y)*100
# Saving model to disk

filename = 'bmi.sav'

joblib.dump(clsf,filename)