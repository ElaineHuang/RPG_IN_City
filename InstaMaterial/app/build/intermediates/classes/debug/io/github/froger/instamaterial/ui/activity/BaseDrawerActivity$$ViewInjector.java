// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.activity;

import android.view.View;
import butterknife.ButterKnife.Finder;

public class BaseDrawerActivity$$ViewInjector<T extends io.github.froger.instamaterial.ui.activity.BaseDrawerActivity> extends io.github.froger.instamaterial.ui.activity.BaseActivity$$ViewInjector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    super.inject(finder, target, source);

    View view;
    view = finder.findRequiredView(source, 2131558509, "field 'drawerLayout'");
    target.drawerLayout = finder.castView(view, 2131558509, "field 'drawerLayout'");
    view = finder.findRequiredView(source, 2131558575, "field 'ivMenuUserProfilePhoto'");
    target.ivMenuUserProfilePhoto = finder.castView(view, 2131558575, "field 'ivMenuUserProfilePhoto'");
    view = finder.findRequiredView(source, 2131558574, "method 'onGlobalMenuHeaderClick'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onGlobalMenuHeaderClick(p0);
        }
      });
  }

  @Override public void reset(T target) {
    super.reset(target);

    target.drawerLayout = null;
    target.ivMenuUserProfilePhoto = null;
  }
}
