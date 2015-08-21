// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.activity;

import android.view.View;
import butterknife.ButterKnife.Finder;

public class MainActivity$$ViewInjector<T extends io.github.froger.instamaterial.ui.activity.MainActivity> extends io.github.froger.instamaterial.ui.activity.BaseDrawerActivity$$ViewInjector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    super.inject(finder, target, source);

    View view;
    view = finder.findRequiredView(source, 2131558514, "field 'rvFeed'");
    target.rvFeed = finder.castView(view, 2131558514, "field 'rvFeed'");
    view = finder.findRequiredView(source, 2131558516, "field 'fabCreate' and method 'onTakePhotoClick'");
    target.fabCreate = finder.castView(view, 2131558516, "field 'fabCreate'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onTakePhotoClick();
        }
      });
    view = finder.findRequiredView(source, 2131558513, "field 'clContent'");
    target.clContent = finder.castView(view, 2131558513, "field 'clContent'");
  }

  @Override public void reset(T target) {
    super.reset(target);

    target.rvFeed = null;
    target.fabCreate = null;
    target.clContent = null;
  }
}
