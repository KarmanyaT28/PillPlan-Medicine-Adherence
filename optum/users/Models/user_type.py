import numpy as np
import pandas as pd
import sklearn
import joblib



df=pd.read_csv('D:/django/Optum-Stratethon/optum/users/datafinal.csv')
# df.head()

X = df.iloc[:, :-1].values
y = df['Type']


from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.25, random_state = 0)


from sklearn.preprocessing import StandardScaler
sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)


from sklearn.naive_bayes import GaussianNB
classifier = GaussianNB()
classifier.fit(X_train, y_train)


from sklearn.metrics import confusion_matrix, accuracy_score
y_pred = classifier.predict(X_test)
# cm = confusion_matrix(y_test, y_pred)
# print(cm)
# print(y_pred)
# accuracy_score(y_test, y_pred)



# test data
userinp = [[1,0,0,0,1,1,0,0,0,0]]
usertype = classifier.predict(userinp)
print(usertype)



filename = 'finalized_usertype.sav'

joblib.dump(classifier,filename)