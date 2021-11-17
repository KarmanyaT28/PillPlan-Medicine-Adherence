df <- read.table("C:/Users/Lenovo/Desktop//Final_Merged.csv",header=TRUE,sep=",")
head(df,10)

library('ggplot2')
library('dplyr')
gender_factor <- factor(df$GENDER,levels = c('F','M'),labels = c("Female","Male"))
race_factor <- factor(df$RACE)
adh_factor <- factor(df$ADH,levels = c(-1,1),labels = c("non-adherent","adherent"))
eth_factor <- factor(df$ETHNICITY)
life_factor <- factor(df$Life.Span,levels = c(-1,1),labels = c("Less Life-span","Better Life Expectancy"))

ggplot(df,aes(x=gender_factor,fill=GENDER))+geom_bar()+labs(title = "Distribution",
                                         y='frequency')+facet_wrap(adh_factor)


ggplot(df,aes(x=eth_factor,fill=ETHNICITY))+geom_bar()+labs(title = "Distribution",
                                         y='frequency')+facet_wrap(adh_factor)


ggplot(df,aes(x=RACE,fill=race_factor))+geom_bar()+labs(title = "Distribution",
                                         y='frequency')+facet_wrap(adh_factor)


new_df <- df%>%
  filter(ADH==-1)
ggplot(new_df, aes(x=age))+geom_density(fill='pink',color='red')+labs(title="Distribution of age ",x='age',y='density')



new_df <- df%>%
  filter(ADH==1)
ggplot(new_df, aes(x=age))+geom_density(fill='pink',color='red')+labs(title="Distribution of age ",x='age',y='density')




new_df <- df%>%
  filter(ADH==1)


ggplot(df,aes(x=life_factor,fill=life_factor))+geom_bar()+ggtitle("Male and Female participants") + facet_wrap(adh_factor)


ggplot(df, aes(x=HEALTHCARE_EXPENSES,fill=adh_factor))+geom_boxplot()





ggplot(data=df,aes(x=age))+geom_histogram(aes(fill=gender_factor))+facet_wrap(adh_factor,ncol=2)




